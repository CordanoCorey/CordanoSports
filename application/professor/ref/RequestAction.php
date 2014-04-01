<?php


namespace application\library\data;

/**
 * Class for model to register its requestable actions.
 *
 * @package data
 * @author coreygelbaugh
 * @version 1.0
 */
class RequestAction {
    
    /*
     * 
     */
    public $action;
    /*
     * 
     */
    public $args;
    /*
     * 
     */
    public $controller = NULL;
    
    
    public function __construct($action,$args,$controller=NULL){
        $this->action = $action;
        $this->args = $args;
        $this->controller = $controller;
    }
    
    public function attachUserId($idUser){
        $this->idUser = $idUser;
    }
    
    public function attachParameter(){
        
    }
    
    
}
