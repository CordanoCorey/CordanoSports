<?php
    namespace Teams;
    /*
     * This pro app for scouting players and teams gives scouts an official
     * status that allows them access to data on prospects and rivals.
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class ScoutPro extends Scout implements Professional
    {
        /*
         * Add player to list of recruits.
         */
        function recruitPlayer($cxn,$player,$request)
        {
            
        }
        /*
         * Add team to list of teams being scouted.
         */
        function recruitTeam($cxn,$player,$request)
        {
            
        }
        /*
         * Extend an unofficial offer to a recruit.
         */
        function makeOffer()
        {
            
        }
    }
?>