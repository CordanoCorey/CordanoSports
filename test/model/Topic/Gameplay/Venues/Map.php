<?php 
    namespace Venues;
    /*
     * 
     * 
     * @Package Venues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Map implements \Includeable,\Reloadable
    {
        use \PlugIn;
        public $feeds=[];
        protected $source=[];
        protected $time;
        protected $location;
        protected $event;
    }
?>