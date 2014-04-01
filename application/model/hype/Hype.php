<?php
namespace application\model\elements;

/**
 * 
 * @package hype
 * @author coreygelbaugh
 * @version 1.0
 */
class Hype implements Axiomatic,Featurable{
    
    use DbCxn;
    use Properties;
    
    public function __construct($idHype,$hypeInfo=NULL){
        
        //set attributes
        foreach($hypeInfo as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
    }
}
