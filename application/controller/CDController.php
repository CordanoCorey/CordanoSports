<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    use application\model\protocol\Filterable as Filterable;
    
    
    use application\view\model\main\UserView as ElementView;
    use application\view\model\main\AccountManager as ManagerView;
    use application\view\model\main\UsersView as CollectionView;
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
         * @param string
         */
        public $response;
        
        /*
         * @param CDDelegate
         */
        public $delegate;
        /*
         * @param DrCordano
         */
        protected $professor;
        /*
         * @param User|AccountManager
         */
        protected $user;
        /*
         * @param Axiomatic
         */
        protected $domainState;
        /*
         * @param Deployable
         */
        protected $appState;
        /*
         * @param ClientRequest
         */
        protected $request;
        /*
         * @param int Element ID to which the request was directed
         */
        protected $idElement;
                
                
        /*
         * @param application\library\data\ClientRequest $request
         */
        public function __construct($request,$delegate)
        {
            $this->request = $request;
            $this->delegate = $delegate;
            $this->professor = new DrCordano($this->request);
            
            if($this->request->idUser){
                $this->user = new User($this->request->idUser);
            }
        }
        /*
         * Invoke the model, then call the request action to update the domain state.
         */
        public function invoke(){
            
            //only post requests make changes to the model
            if($this->request->method == "post"){ 
                
                //set request parameters
                $action = $this->request->action;
                $args = $this->request->getArgs();
                
                //check whether this is a valid request action
                if(method_exists($this,$action)){ 
                    $this->$action($args);
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
                    
                    $this->appState = new ElementView($this->domainState);
                }
                elseif($this->domainState instanceof Filterable){
                    
                    $this->appState = new CollectionView($this->domainState);
                }
                elseif($this->domainState instanceof Administrative){
                    
                    $this->appState = new ManagerView($this->domainState);
                }
                else{
                    $this->appState = new FanbotView($this->domainState);
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
        }
        
        /*
         * Call the appropriate response method for the request.
         */
        public function output(){
            
            //include the page layout for the current Indexable view model 
            if($this->appState instanceof Indexable){
                $this->index($this->request->format);
            }
            else{ //echo the current app state
                $this->deploy($this->request->format);
            }
        }
        
        /*
         * The incoming request is for a new page, so load the page layout.
         */
        protected function index($format="html"){
            
            //ask for layout script
            $layout = $this->appState->setLayout();
            
            //ask for layout background 
            $this->appState->setBackground();
            
            //Load initial view which in turn loads all its subviews
            $view = $this->appState->loadView();
            
            //render the page
            include $layout;
            
            //prevent further echo statements
            exit;
        }
        
        /*
         * Forward the updated application state to the client via the view.
         */
        protected function deploy($format="html"){
            
            //store app state details in session to retrieve upon request
            $_SESSION["sender"] = $this->appState->registerSender();
            
            //send json response back to client
            if($format == "json"){
                echo json_encode($this->appState);
            }
            else{
                
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
        
        protected function search(){
            $expectedArgs = ['topic','info','inputString'];
            $args = $this->delegate->filterArgs($expectedArgs);
            
            $collection = isset($this->requestArgs["collection"])? $this->requestArgs["collection"]:NULL;
            $searchString=isset($this->requestArgs["searchString"])? $this->requestArgs["searchString"]:"";
            $info=isset($this->requestArgs["info"])? $this->requestArgs["info"]:NULL;
            
            $this->professor->search($collection,$searchString,$info);
        }
        
        protected function autoComplete(){
            
            $this->search();
        }
        /*
         * 
         */
        protected function promptUser(){
            $this->hypeMachine->promptUser();
        }
        
        protected function getAnswer($args=[]){
            $searchString=isset($args["searchString"])? $args["searchString"]:"";
            $info=isset($args["info"])? $args["info"]:NULL;
            
            $this->fanbot->getAnswer($searchString,$info);
        }
        
        protected function postLogin($args=[]){
            $userName=isset($args["userName"])? $args["userName"]:"";
            $password=isset($args["password"])? $args["password"]:NULL;
            
            $this->accountManager->postLogin($userName,$password);
        }
        
        
        private function create($args=[]){
            $userName=isset($args["userName"])? $args["userName"]:"";
            $password=isset($args["password"])? $args["password"]:NULL;
            $email=$password=isset($args["password"])? $args["password"]:NULL;
            
        }
        
        /*
         * 
         */
        public function filterArgs($expectedArgs=[],$validate=FALSE){
            $filteredArray = array_intersect_key($this->request->args,$expectedArgs);
            return $filteredArray;
        }
    }