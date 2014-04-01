<?php 
    namespace Events;
    /*
     * Class for tournaments.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Tournament extends Event implements \Manageable
    {
        /*
        * Load the Event Planner app.
        * 
        * @param
        * @return
        * @throws
        */
       public function manage($user,$role=NULL)
       {
            return new TourneyBuilder($user,$this,$role);
       }
    }
?>