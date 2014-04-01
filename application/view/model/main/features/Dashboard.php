<?php
    /*
     * Represent user's connection to the current topic,
     * recommend further content, request user input. The sideline
     * is reloaded whenever a new index or app is loaded.
     * 
     * The Dashboard display is the user's control panel that is 
     * represented in some manner on every page. It allows for quick
     * links to a users' favorite content, it recommends content for 
     * the user to check out, and it outlines the active user's 
     * connection to the content topic. The dashboard is reloaded 
     * whenever a new index or app is loaded.
     * 
     * 
     * @Package Main
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Dashboard implements Displayable
    {
        use Widget;
        private $features;
        public $sideline;
        public $checkIn;
        public $results;
        public $headlines;
        
        public function deploy($feature,$format);
    }
?>