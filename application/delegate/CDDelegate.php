<?php
    namespace application\delegate;
    use \application\delegate\SecurityGuard as SecurityGuard;
    use \application\delegate\Router as Router;
    
    
    /*
     * The app delegate class holds the current application space. 
     * 
     * @package delegate
     * @version 1.0
     * @author coreygelbaugh
     */
    class CDDelegate implements \JsonSerializable
    {
        /*
         * @param AppSpace Complete specification of the Cordano client-side application
         */
        private $appSpace;
        /*
         * @param SecurityGuard Use security guard to sanitize user input
         */
        private $securityGuard;
        /*
         * @param Router Use router to build UserRequest object and route request to correct controller
         */
        public $router;
        /*
         * @param UserRequest
         */
        private $request;
        /*
         * @param string|array
         */
        private $dbResponse;
        
        
        public function __construct(){
            
            $this->securityGuard = new SecurityGuard();
            
            $get = $this->securityGuard->sanitize($_GET);
            $post = $this->securityGuard->sanitize($_GET);
            $file = $this->securityGuard->sanitize($_FILE);
            $requestUri = $this->securityGuard->sanitize($_SERVER['REQUEST_URI']);
            $pathInfo = $this->securityGuard->sanitize($_SERVER['PATH_INFO']);
            
            //load the router and initialize the user request object
            $this->router=new Router($requestUri,$pathInfo);
            $this->request = $this->router->inputRequest($get,$post,$file);
        }
        
        public function __call($name,$args=NULL){
            if(method_exists($this->router,$name)){
                return call_user_func_array([$this->router,$name],$args);
            }
            elseif(method_exists($this->securityGuard,$name)){
                return call_user_func_array([$this->securityGuard,$name],$args=NULL);
            }
            else{
                return FALSE;
            }
        }
        
        /*
        * Load the correct controller for processing the request.
        * 
        * @return CDController
        */
        public function routeRequest()
        {
             return $this->router->requestController;
        }
        
        /*
         * Update complete application specification (stored in JSON file).
         */
        private function reloadAppSpace(){
            
        }
        
        /*
         * Send app reference object to view element.
         */
        public function getAppRef($sender){
            
        }
        
        /*
         * @return UserRequest
         */
        public function getRequest(){
            
            return $this->request;
        }
        
        /*
         * When the delegate respresents the app state after processing the request, no view model 
         * object has been loaded to be displayed to the user so we simply return the database response 
         * to the request.
         * 
         * @return string|array
         */
        public function jsonSerialize(){
            
            return $this->dbResponse;
        }
    }