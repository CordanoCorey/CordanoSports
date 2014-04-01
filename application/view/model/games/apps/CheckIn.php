<?php 
    namespace Gameplay;
     /*
     * Check-in allows users to find, schedule and coordinate events. Input a time 
     * and location to find or post a pickup game or workout.
     * 
     * @Package Gameplay
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class CheckIn implements \Triggerable,\Interactive,\Live
    {
        use \Applet;
        use \RealTime;
        public $feeds=[];
        protected $source=[];
        protected $time;
        protected $location;
        protected $event;
        
        public function getEventTriggers()
        {
            
        }
    }
?>