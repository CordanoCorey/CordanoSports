<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace application;

/**
 * Description of Navigator
 *
 * @author coreygelbaugh
 * @version 1.0
 */
class Navigator {
    
    public function __construct($controller = NULL){
        $url = "library/json/nav.json";
        $json = file_get_contents($url);
        $data = json_decode($json, TRUE);
    }
    
    public function getBackground(){
        
    }
    
    public function getTitle(){
        
    }
            
    public function navPlayerView($state){
        
    }
}
