<?php
    namespace Teams;
    /*
     * App to create, edit, and manage a team.
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class TeamBuilder extends Team implements \Managerial,\Createable
    {
        protected $user;
        protected $activeTeam;
        protected $teams;
        
        public function __construct($user,$team=NULL)
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
        function manage($cxn)
        {
            
        }
        /*
        * Change the active idTeam.
        * 
        * @Param
        * @Return
        * @Throws
        */
        function changeTeam()
        {    
            
        }
        /*
         * Find free agents in your area within this sport.
         * 
         * @Param
         * @Return
         * @Throws
         */
        function searchFreeAgents()
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
        function addPlayer($idPlayer,$rosterSlot,$status)
        {
            $rosterSlot=isset($request);
        }
        /*
         * Register a team to play within a league.
         */
        function joinLeague()
        {
            
        }
        /*
         * Register a team to participate in an event such as a
         * tournament or fund raiser.
         */
        function attendEvent()
        {
            
        }
    }
?>