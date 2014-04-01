<?php
    namespace Teams;
    /*
     * Scout is a class for scouting players and/or teams.
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Scout extends Team implements Executive
    {
        /*
         * Add file to user folder.
         */
        function add($cxn,$class,$id,$folder=NULL)
        {
            
        }
        public $activeId;
        /*
         * Add player to watch list
         */
        function watchPlayer($cxn,$player,$request)
        {
            
        }
    }
?>