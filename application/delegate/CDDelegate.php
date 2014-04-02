<?php
    namespace application\delegate;
    
    /*
     * The app delegate class delegates tasks to whichever of its contained classes
     * is built to handle requests of that type. 
     * 
     * @package delegate
     * @version 1.0
     * @author coreygelbaugh
     */
    Class CDDelegate
    {
        /*
         * @param SecurityGuard Use security guard to sanitize user input.
         */
        private $securityGuard;
        /*
         * @param Router Use router to build UserRequest object and route request to correct controller.
         */
        private $router;
        /*
         * @param Factory Use factory to access classes that aren't necessarily utilizes on every request.
         */
        public $factory;
        
        public function __construct(){
            
            $this->securityGuard = new SecurityGuard();
            
            
            $get = $this->securityGuard->sanitize($_GET);
            $post = $this->securityGuard->sanitize($_GET);
            $file = $this->securityGuard->sanitize($_FILE);
            
            $requestUri = $this->securityGuard->sanitize($_SERVER['REQUEST_URI']);
            $pathInfo = $this->securityGuard->sanitize($_SERVER['PATH_INFO']);
            
            $this->router=new Router($requestUri,$pathInfo);
            $this->router->inputRequest($get,$post,$file);
            
            //load the Cordano factory
            $this->factory=new Factory();
        }
        
        public function __call($name,$args=NULL){
            if(method_exists($this->router,$name)){
                return call_user_func_array([$this->router,$name],$args);
            }
            elseif(method_exists($this->securityGuard,$name)){
                return all_user_func_array([$this->securityGuard,$name],$args=NULL);
            }
            elseif(method_exists($this->factory,$name)){
                return all_user_func_array([$this->securityGuard,$name],$args=NULL);
            }
            else{
                return FALSE;
            }
        }
    }