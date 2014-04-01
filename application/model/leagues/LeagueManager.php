<?php
    namespace application\model\apps\leagues;
    use application\model\elements\League as League;
    
    /*
     * App to manage a league.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class LeagueManager implements \Managerial,\Createable
    {
        public $league;
        public $commissioner;
        public $commissionerPro;
        
        public function __construct($leagueInfo){
            $this->league = new League($leagueInfo);
        }
        /*
         * Create a new league.
         * 
         * @Param
         * @Return
         * @Throws
         */
        private function create()
        {
            
        }
        /*
         * 
         */
        function addTeam()
        {
            
        }
        /*
         * 
         */
        function addTransaction()
        {
            
        }
        /*
         * 
         */
        function addPlay()
        {
            
        }
        /*
         * 
         */
        function addMultimedia()
        {
            Multimedia::add();
        }
        /*
        * Change the active idLeague.
        */
        function changeLeague()
        {    
            
        }
        
        /*
        * Manually build a league schedule.
        */
       function setSchedule()
       {

       }
        /*
        * Auto-generates a league schedule given a rule set.
        */
       function autoSchedule()
       {

       }
       /*
        * 
        */
       function setPlay()
       {

       }
       /*
        * 
        */
       function announce()
       {

       }
    }
?>