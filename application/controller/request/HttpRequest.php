<?php
namespace application\delegate\output;

/**
 * Data object for outgoing requests.
 *
 * @package delegate
 * @author coreygelbaugh
 * @version 1.0
 */
class HttpRequest {
    
    public $args;
    
    public function __get($name){
        return $this->args[$name];
    }
    
    public function __set($name,$value){
        return $this->args[$name]=$value;
    }
}
