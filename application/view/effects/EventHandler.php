<?php


namespace application\library\data;

/**
 * The event handler data type is utilized by the Observer class to
 * render javascript event handler functions for a single DOM object
 * selector.
 *
 * @package data
 * @author coreygelbaugh
 * @version 1.0
 */
class EventHandler {
    
    /*
     * @param string
     */
    public $selector;
    /*
     * @param string Controller listening for user events
     */
    public $listener;
    
    public function __construct($selector,$event,$requestAction = NULL){
        $this->selector = $selector;
    }
    
    public function addEffect(){
        
    }
}
