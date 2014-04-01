<?php
    namespace application\model\teams;
    /*
     * App to create, edit, and manage a team.
     * 
     * @package teams
     * @version 1.0
     * @author coreygelbaugh
     */
    Class TeamBuilder extends Team
    {
        protected $user;
        protected $activeTeam;
        protected $teams;
        
        /*
         * @param GeneralManager|VirtualGM
         */
        private $gm;
        /*
         * @param Coach|CoachPro
         */
        private $coach;
        /*
         * @param Scout|ScoutPro
         */
        private $scout;
        
        public function __construct($user,$action="")
        {
            $this->user=$user;
            $this->active=$team;
            $this->loadTeams();
        }
        /*
         * Create a new team.
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
         * 
         * @Param
         * @Return
         * @Throws
         */
        private function coach(){
            
        }
        private function scout(){
            
        }
        private function manage(){
            
        }
        
        
        
        
        
        /*
        * Change the active idTeam.
        * 
        * @Param
        * @Return
        * @Throws
        */
        private function changeTeam()
        {    
            
        }
        /*
         * Find free agents in your area within this sport.
         * 
         * @Param
         * @Return
         * @Throws
         */
        private function searchFreeAgents()
        {
            
        }
        /*
         * Add player to team's roster with a given roster slot
         * and status.
         * 
         * @Param
         * @Return
         * @Throws
         */
        private function addPlayer($idPlayer,$rosterSlot,$status)
        {
            $rosterSlot=isset($request);
        }
        /*
         * Register a team to play within a league.
         */
        private function joinLeague()
        {
            
        }
        /*
         * Register a team to participate in an event such as a
         * tournament or fund raiser.
         */
        private function attendEvent()
        {
            
        }
    }
?>