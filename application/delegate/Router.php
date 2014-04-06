<?php
    namespace application\delegate;
    use \application\controller\request\UserRequest as UserRequest;
    
    /*
     * The Router class takes a get request and a post request, instantiates a new UserRequest object, 
     * then loads the appropriate controller giving the UserRequest as an argument.
     * 
     * @package delegate
     * @version 1.0
     * @author coreygelbaugh
     */
     Class Router{ 
        /*
         * @param string
         */
        public $requestController="";
        /*
         * @param string
         */
        private $requestUri;
        /*
         * @param array
         */
        private $pathInfo;
        
        /*
         * 
         */
        public function __construct($requestUri="",$pathInfo=[]){
            $this->requestUri = $requestUri;
            $this->pathInfo = $pathInfo;
            $this->setRequestController();
        }
        /*
         * 
         * 
         * @return UserRequest User request object formatted to controller's specifications
         */
        public function inputRequest($getRequest,$postRequest=NULL,$file=NULL){

            return new UserRequest($getRequest,$postRequest,$file);
        }
       
        
        /*
         * Parse the request url string.
         * 
         * @return array
         */
        public function getUrlElements(){
            $urlElements = explode('/', $this->requestUri);
            return $urlElements;
        }
        
        /*
         * Set the name of the controller responsible for handling this request.
         */
        public function setRequestController(){
            //set namespace for controllers
            $namespace="application\\controller\\";
            
            //find the name of the controller in the url
            $urlElements = $this->getUrlElements();
            
            if($urlElements[0]){
                $controllerName = $urlElements[0];
            }
            else{
                $controllerName = "CDController";
            }
            
            $controllerName = "CDController";
            
            //set the complete controller namespace name
            $this->requestController = $namespace.$controllerName;
        }
        
        public function getUserAgent(){
            
        }
        
        
        public function get_client_language($availableLanguages, $default='en'){
            if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
                    $langs=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

                    foreach ($langs as $value){
                            $choice=substr($value,0,2);
                            if(in_array($choice, $availableLanguages)){
                                    return $choice;
                            }
                    }
            } 
            return $default;
        }
    }