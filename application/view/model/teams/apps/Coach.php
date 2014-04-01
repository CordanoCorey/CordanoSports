<?php
    namespace Teams;
    /*
     * Within the general manager app, teams can manage lineups,
     * plays, and all on-court/field team activity.
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Coach extends \Teams\TeamBuilder implements Executive
    {
        /*
         * Add file to user folder.
         */
        function add($cxn,$class,$id,$folder=NULL)
        {
            
        }
        /*
         * Add an existing checklist play to your coaching playbook.
         */
        function addPlayCall()
        {

        }
        /*
         * Send private message to each player on a coached team. This
         * message will also appear in the team's locker room.
         */
        function messageTeam()
        {
            
        }
        /*
         * Add practice events to player calendars.
         */
        function schedulePractice()
        {
            
        }
    }
?>