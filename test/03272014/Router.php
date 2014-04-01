<?php
    namespace application\config;
    use application\logic\CDEngine as CDEngine;
    use application\controller\CDController as CDController;
    
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
         * @param CDController
         */
        private $originController;
        /*
         * @param string
         */
        public $destinationController="CDController";
        

        public function __construct($getRequest,$postRequest=NULL)
        {
            $this->request=$this->loadRequest($getRequest,$postRequest);
            //Make sure the registry is set and up to date
            if(!isset($_SESSION["registry"])){
               $_SESSION["registry"]=new Registry("mainController");
           }
           $_SESSION["registry"]=new Registry("mainController");
        }
        /*
         * SWAPS THE BACKGROUND IMAGE DEPENDING ON PAGE URI.
         * 
         * @return string   The directory path to the background image.
         */
        public function curPageURL() {
            $page = $_SERVER['REQUEST_URI'];
            if($page == '/' && '/index.php') 
            {
                return 'background-image:url(images/bg-signed-in.jpg);';
            }
            elseif($page == '/ingame.php') {
                return 'background-image:url(images/bg-ingame.jpg);';
            }
            elseif($page == '/live.php') {
                return 'background-image:url(images/bg-live.jpg);';
            }
            elseif($page == '/fantasy.php') {
                return 'background-image:url(images/bg-fantasy.jpg);';
            }
            elseif($page == '/fandom.php') {
                return 'background-image:url(images/bg-fandom.jpg);';
            }
            elseif($page == '/lifestyle.php') {
                return 'background-image:url(images/bg-lifestyle.jpg);';
            }
            else
            {
                return 'background-image:url(images/bg-index.jpg);';
            }
        }

        function getPageTitle($target){
            switch($target){
                default:
                    return "Cordano :: Believe the Hype";
            }
        }

        public function navigate($navItem)
        {
            switch($navItem){
                case "apps":
                    return "App 1 <br> App 2";
                default:
                    break;
            }
        }
        /*
         * After the controller has been invoked, update the application state.
         */
        public function updateSession()
        {
            $_SESSION["background"]=$this->curPageURL();
            $_SESSION["title"]=$this->getPageTitle();
            $_SESSION["apps"]=$this->navigate("apps");
        }
        /*
        * Build user request object.
        * 
        * @return CDRequest
        */
       public function loadRequest($getRequest=[],$postRequest=[])
       {
           return new CDRequest($getRequest,$postRequest);
       }
       public function setController()
       {
           return $_SESSION["registry"]->{lcfirst("MainController")}();
       }
       /*
        * Load the correct controller for processing the request.
        * 
        * @return CDController
        */
       public function routeRequest()
       {
           return new CDController($this->request);
       }
    }