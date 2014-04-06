<?php
    namespace application\controller\request;
    /*
     * Data object for incoming requests.
     * 
     * @package delegate
     * @version 1.0
     * @author coreygelbaugh
     */
     Class UserRequest{
         
        public $idUser;
        public $idTopic;
        public $idLeague;
        public $idTeam;
        public $idPlayer;
        public $idGame;
        public $idHype;
        
        public $method="get";
        public $action="";
        public $role="";
        public $app="";
        public $collection="";
        public $feature="";
        public $view="";
        public $format="html";
        
        public $dimension="";
        public $perspective="";
        
        private $tmplFile="";
        private $style;
        
        
        
        private $sender;
        private $user;
        private $element;
        
        public $status=NULL;
        public $controller="CDController";
        public $layout="main";
        
        private $args=[];
        
        public $requestType;
        public $responseType;
        
        public function __construct($getRequest=[],$postRequest=[]){
            if($getRequest){
                foreach($getRequest as $key=>$value){ 
                    if(property_exists(get_class($this),$key)){
                        $this->$key=$value;
                    }
                    else{
                        $this->args[$key]=$value;
                    }
                }
            }
            
            if($postRequest){
                foreach($postRequest as $key=>$value){ 
                    if(property_exists(get_class($this),$key)){
                        $this->$key=$value;
                    }
                    else{
                        $this->args[$key]=$value;
                    }
                }
            }
        }
        
        
        /*
        * Checks whether request is received via ajax call.
        */
        public function isAjax(){ 
            if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  
                strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') { 

                // It is an ajax call 
                return true; 
            } 
            else{ 
                // It is not an ajax call 
                return false; 
            } 
        }
        /*
         * 
         */
        public function setUserAgent($userAgent){
            $this->userAgent = $userAgent;
        }
        /*
         * 
         */
        public function isMobile(){
            return FALSE;
        }
        
        public function isLoggedIn(){
            return ($this->idUser)? TRUE:FALSE;
        }
        
        public function setRequestMethod(){
            
        }
        
        public function getArgs(){
           return $this->args;
        }
        
        public function getFormat(){
            return ($this->isMobile())? "json":$this->format;
        }
     }