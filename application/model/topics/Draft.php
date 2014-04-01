<?php 
    namespace Events;
    /*
     * Class for draft events.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Draft extends Event implements \Manageable
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
            return new DraftRoom($user,$this,$role);
       }
    }
?>