<?php
    namespace application\controller;
    use application\model\appsFanbot as Fanbot;
    use application\model\apps\HypeMachine as HypeMachine;
    use application\model\apps\AccountManager as AccountManager;
    use application\model\apps\leagues\LeagueManager as LeagueManager;
    /*
    * Controller for executing league requests.
    * 
    * @package leagues
    * @author coreygelbaugh
    * @version 1.0
    */
    Class LeagueController extends CDController implements Interactive
    {
        public $layout="layouts/home.php";
        public $background="bg-signed-in.jpg";
        public $title="Cordano :: Believe the Hype";
        public $pages=["Leagues","League","LeagueManager","BoardRoom"];
        public $views=[];
        
        /*
         * @return League
         */
        public function __construct($request,$user){
            parent::construct();
            $this->leagueManager = new LeagueManager($user,$this->getLeagueInfo());
        }
        
        public function index(){
            $content=$this->viewModel->format();
            $templ=new Template("home.php",$content);
        }
        
        private function getLeagueInfo(){
            $leagueInfo=[];
            $leagueInfo["idUser"]=$this->request["idLeague"];
            $leagueInfo["displayName"]=$this->request["displayName"];
            return $leagueInfo;
        }
        
        /*
         * @return League
         */
        private function leagueManagerAction($action,$args,$role=NULL){
            
            $this->domainState = $this->leagueManager->$role->action($args);
        }
        
        
    }