<?php 
    namespace Events;
    /*
     * The Draft Room allow users to view, report, or predict tournament results.
     * For fantasy sports, users can also fill out draft boards before the live
     * fantasy draft to plan draft pick strategy ahead of time.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class DraftRoom extends Draft implements \Managerial
    {
        use Applet;
        /*
         * 
         */
        public function render()
        {
            
        }
        public function getEventTriggers()
        {
            
        }
    }
?>