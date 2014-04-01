<?php
    namespace application\delegate\input;
    
    /*
     * The Router class takes a get request and a post request, instantiates a new CDRequest object, 
     * then loads the appropriate controller giving the CDRequest as an argument.
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
         * @param ClientRequest
         */
        private $request;

        public function __construct($getRequest,$postRequest=NULL)
        {
            if($getRequest["controller"]){
                $this->destinationController = ucfirst($getRequest["controller"])."Controller";
            }
            $this->request = new ClientRequest($getRequest,$postRequest);
        }
       /*
        * Load the correct controller for processing the request.
        * 
        * @return CDController
        */
       public function routeRequest()
       {
            $namespace="application\\controller\\";
            $this->requestController=$this->request->getController();
            $controller=$namespace.$this->requestController;
            return new $controller($this->request);
       }
       
       function get_client_language($availableLanguages, $default='en'){
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