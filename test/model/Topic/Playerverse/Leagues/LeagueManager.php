<?php
    namespace Leagues;
    /*
     * App to manage a league.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class LeagueManager extends League implements \Managerial,\Createable
    {
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