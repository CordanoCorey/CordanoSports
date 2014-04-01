<?php
    namespace application\controller;
    use application\model\apps\Fanbot as Fanbot;
    use application\model\apps\HypeMachine as HypeMachine;
    use application\model\apps\AccountManager as AccountManager;
    use application\model\apps\games\PlayerDeveloper as PlayerDeveloper;
    /*
    * Controller for executing player requests.
    * 
    * @package players
    * @author coreygelbaugh
    * @version 1.0
    */
    Class PlayerController extends CDController implements Interactive
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
            $this->playerDeveloper = new PlayerDeveloper($user,$this->getPlayerInfo());
        }
        
        private function getPlayerInfo(){
            $playerInfo=[];
            $playerInfo["idUser"]=$this->request["idPlayer"];
            $playerInfo["displayName"]=$this->request["displayName"];
            return $playerInfo;
        }
        /*
         * @return Player
         */
        private function interact(){
            
        }
        /*
         * @return Player
         */
        private function participate(){
            
        }
        
        /*
         * @return Player
         */
        private function manage($action,$args,$role=NULL){
            
            $this->domainState = $this->playerDeveloper->$role->action($args);
        }
    }