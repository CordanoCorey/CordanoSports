<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    use application\professor\Information as Information;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    
    
    use application\view\model\main\UserView as ElementView;
    use application\view\model\main\AccountManager as ManagerView;
    use application\view\model\main\FanbotView as FanbotView;
    
    
    use application\view\model\protocol\Indexable as Indexable;
    use application\view\model\protocol\Deployable as Deployable;
   
    /*
    * Main Controller for executing question, answer, and general user requests. 
    * 
    * The controller's main tasks are to:
    *      1. Invoke the model and call the request action to update the domain state.
    *      2. Pass the updated domain state to the view model to update the application state.
    *      3. Forward the updated application state to the client via the view.
    *      4. Adhere to interface user event listening protocol.
    * 
    * @package main
    * @author coreygelbaugh
    * @version 1.0
    */
    Class CDController
    {
        /*
         * @param UserRequest
         */
        protected $request;
        /*
         * @param Axiomatic
         */
        protected $dbState;
        /*
         * @param Deployable
         */
        protected $appState;
        
                
               
        /*
         * @param application\library\data\ClientRequest $request
         */
        public function __construct($delegate)
        {
            //get info about the request that the controller needs to know
            $this->request = $delegate->getRequest();
            
            //the delegate represents the current app state
            $this->appState = $delegate;
            
            //load new professor object to represent db state
            $this->dbState = new DrCordano($this->getInfo);
            
            //if there if a user, load new user object to represent db state
            if($this->request->idUser){
                $this->dbState = new User($this->request->idUser,$this->dbState);
            }
        }
        
        /*
         * Acquire all database relevant information from this request in order to start
         * building the database query.
         * 
         * @return Information
         */
        protected function getInfo(){
            
            return new Information($this->request);
        }
        
        /*
         * Invoke the model, then call the request action to update the domain state.
         */
        public function invoke(){
            
            //only post requests make changes to the model
            if($this->request->method == "post"){ 
                
                //set request parameters
                $action = $this->request->action;
                
                //check whether this is a valid request action
                if(method_exists($this,$action)){ 
                    $this->$action();
                }
            }
        }
        
        /*
         * Pass the updated domain state to the view model to update the application state.
         */
        public function process(){
            
            //load view model for get requests
            if($this->request->method == "get"){
                
                if($this->domainState instanceof Axiomatic){
                    
                    $this->appState = new ElementView($this->domainState,$this->appState);
                }
                elseif($this->domainState instanceof Administrative){
                    
                    $this->appState = new ManagerView($this->domainState,$this->appState);
                }
                else{
                    $this->appState = new FanbotView($this->domainState,$this->appState);
                }
            }
                //load collections if necessary
                if($this->request->collection){
                    $this->appState = $this->appState->loadCollection($this->request->collection);
                }
                
                //load features if necessary
                if($this->request->feature){
                    $this->appState = $this->appState->loadFeature($this->request->feature);
                }
        }
        
        /*
         * Call the appropriate response method for the request.
         */
        public function output(){
            
            if($this->appState instanceof Indexable){
                
                //include the page layout for the current Indexable view model 
                $this->index($this->request->format);
            }
            else{ 
                //echo the current app state
                $this->deploy($this->request->format);
            }
        }
        
        /*
         * The incoming request is for a new page, so load the page layout.
         */
        protected function index($format="html"){
            
            //set page background 
            $_SESSION["background"] = "images/backgrounds/".$this->appState->getBackground();
            
            //set page title 
            $_SESSION["title"] = $this->appState->getTitle();
            
            //Load initial view which in turn loads all its subviews
            //$view = $this->appState->loadView();
            
            if($format == "json"){
                json_encode($this->appState);
            }
            else{
                
                //include the page layout
                $layout = $this->appState->getLayout();
                $_SESSION["layout"] = $layout;
                $view = $this->appState->loadView();
                
                include_once "templates/layouts/".$layout.".php";
            }
        }
        
        /*
         * Forward the updated application state to the client via the view.
         */
        protected function deploy($format="html"){
            
            //send json response back to client
            if($format == "json"){
                echo json_encode($this->appState);
            }
            else{
                $view = $this->appState->loadView();
                $view->render();
            }
        }
        
        
        
        
        
        
        
        
        
        
        ###POSTED ACTION FUNCTIONS###
        
        /*
         * This method is called if there is no request action. It reloads an active view if there
         * is a registered sender. Otherwise, it does not update the domain state.
         */
        protected function reload(){
            
            $args = $this->request->args;
            $lastUpdateTime = (isset($args["updateTime"]))? $args["updateTime"]:NULL;
            $sender = (isset($args["sender"]))? $args["sender"]:NULL;
            
            $this->domainState = $this->user->reload($lastUpdateTime);
            
            if($sender){
                $this->appState = new $sender($this->domainState);
            }
        }
        /*
         * 
         */
        protected function search(){
            
            $expectedArgs = ['topic','info','inputString'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->professor->search($args["collection"],$args["searchString"],$args["info"]);
        }
        /*
         * 
         */
        protected function autoComplete(){
            
            $this->search();
        }
        /*
         * 
         */
        protected function promptUser(){
            
            $this->hypeMachine->promptUser();
        }
        /*
         * 
         */
        protected function getAnswer(){
            
            $expectedArgs = ['searchString','info'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->professor->search($args["searchString"],$args["info"]);
        }
        /*
         * 
         */
        protected function postLogin(){
            
            $expectedArgs=['login','password'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            
            $this->accountManager->postLogin($login,$password);
        }
        
        /*
         * 
         */
        private function create(){
            
            $expectedArgs = ['userName','password','email','userName','password','dob'];
            
        }
        /*
         * 
         */
        public function follow(){
            
            $expectedArgs = ['idHype'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->user->favorite($args["idUser"]);
        }
        /*
         * 
         */
        public function followTopic(){
            
            $expectedArgs = ['idTopic'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->user->favorite($args["idTopic"]);
        }
        /*
         * 
         */
        public function favoriteHype(){
            
            $expectedArgs = ['idHype'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->user->favorite($args["idHype"]);
        }
        
        /*
         * 
         */
        public function publishHype(){
            
            $expectedArgs = ['idHype','folder'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->user->favorite($args["idHype"]);
        }
        /*
         * 
         */
        public function reviewHype(){
            
        }
        /*
         * 
         */
        public function updateMyFandom(){
            
            $expectedArgs=['sports','leagues','teams','players','statusChange'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->accountManager->updateMyFandom();
        }
        /*
         * 
         */
        public function updateMyFantasy(){
            
            $expectedArgs=['sports','leagues','teams','players','statusChange'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->accountManager->updateMyFantasy();
        }
        /*
         * 
         */
        public function updateMyLifestyle(){
            
            $expectedArgs=['hobbies','statusChange'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->accountManager->updateMyLifestyle();
        }
        /*
         * 
         */
        public function validateUserInput(){
            
            $expectedArgs = ['inputField','inputValue'];
            $args = $this->filterArgs($expectedArgs,$this->request->args);
            
            $this->accountManager->validate($args["inputField"],$args["inputValue"]);
        }
        
        
    }