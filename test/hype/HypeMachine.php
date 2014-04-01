<?php
    namespace application\controller;
    use application\model\apps\Fanbot as Fanbot;
    use application\model\apps\HypeMachine as HypeMachine;
    use application\model\apps\AccountManager as AccountManager;
    use application\model\apps\hype\SportsReporter as SportsReporter;
    use application\model\apps\hype\SportsWriter as SportsWriter;
    
    /*
    * Controller for executing hype requests.
    * 
    * @package hype
    * @author coreygelbaugh
    * @version 1.0
    */
    Class HypeController extends CDController implements Interactive
    {
        /*
         * application\logic\hype\HypeMachine
         */
        private $hypeMachine;
        public $layout="layouts/home.php";
        public $background="bg-signed-in.jpg";
        public $title="Cordano :: Believe the Hype";
        public $pages=["hype","hypemachine","analytics","showcase"];
        public $views=["news","transactions","stats","plays","commentary","analysis","multimedia"];
        
        private function getHypeInfo(){
            $hypeInfo=[];
            $hypeInfo["idHype"]=$this->request["idHype"];
            return $hypeInfo;
        }
        
        public function review($args){
            $this->hypeMachine->sportsReporter->review($args);
        }
        
        public function publish($args){
            $this->hypeMachine->sportsWriter->publish($args);
        }
        
        public function attach(){
            
        }
        
        public function addHype(){
            
        }
        
        public function tagTopic(){
            
        }
        
        public function report(){
            
        }
        
        public function cite(){
            
        }
    }