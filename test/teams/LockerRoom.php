<?php
    namespace application\controller;
    use application\model\apps\Fanbot as Fanbot;
    use application\model\apps\HypeMachine as HypeMachine;
    use application\model\apps\AccountManager as AccountManager;
    use application\model\apps\games\TeamBuilder as TeamBuilder;
    /*
    * Controller for executing team requests.
    * 
    * @package teams
    * @author coreygelbaugh
    * @version 1.0
    */
    Class TeamController extends CDController implements Interactive
    {
        public $layout="layouts/home.php";
        public $background="bg-signed-in.jpg";
        public $title="Cordano :: Believe the Hype";
        public $views=[];
        
        /*
         * 
         */
        public function __construct($request,$user){
            parent::construct();
            $this->teamBuilder = new TeamBuilder($user,$this->getTeamInfo());
        }
        /*
         * @return Team
         */
        private function teamBuilderAction($action,$args,$role=NULL){
            
            $this->domainState = $this->playerDeveloper->$role->action($args);
        }
        
        private function getTeamInfo(){
            
        }
    }