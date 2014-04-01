<?php
    /*
     * The Playerverse refers to the hierarchy of players, teams, and leagues,
     * their connection to venues, and their dependencies upon organizations
     * and rulesets. This application is participatory in the sense that, if 
     * a user is an administrator of an account in the playerverse, the app
     * automatically loads the management versions of widgets for the user to
     * take advantage of available gameplay actions.
     * 
     * @Package Playerverse
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class Playerverse implements Regulatory,Summarizable,Taggable
     {
         public $idPlayerverse;
         private $players;
         private $teams;
         private $leagues;
         private $rivalries;
         
         use Regulations;
         use Factors;
         use DatabaseConnection;
         public function __construct()
        {
            $this->getSource();
        }
        /*
         * Tag elements from within the Hype Machine.
         * 
         * @Param int $idHype
         * @Throws BlockedException
         */
        public function tag($idHype)
        {
            
        }
        public function getRules()
        {
            
        }
        private function setRules()
        {
            
        }
     }
?>