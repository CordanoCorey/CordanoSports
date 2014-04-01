<?php
namespace application\view;

/**
 * This class includes the template file for a view and holds the data that 
 * will be echoed in the template file.
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 */
class Template {
    private $args;
    public $file;
    
    public function __get($name){
        return iterate($this->args[$name]);
    }
    
    public function __construct($args=[],$file=""){
        $this->args=$args;
        $this->file=$file;
    }
    
    public function render(){
        if($this->file){
            include $this->file;
        }
        else{
            foreach($this->args as $htmlString){
                echo clean($htmlString);
            }
        }
    }
    
    public function iterate($obj){
        if($obj instanceof Template){
            return $obj->render();
        }
        elseif(is_string($obj)){
            return $this->clean($obj);
        }
        else{
            return "";
        }
    }
    
    public function clean($htmlString){
        return $htmlString;
    }
}
