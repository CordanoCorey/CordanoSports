<?php
namespace application\model\elements;
use application\model\db\protocol\Derivative as Derivative;

/**
 * 
 * @package main
 * @author coreygelbaugh
 * @version 1.0
 */
class Answer implements Derivative,Featurable {
    use Properties;
    /*
     * @param string either 'dne', 'consensus', 'verified', or 'official'
     */
    public $answerStatus;
    
    
    
    public function __construct($searchCriteria){
        
        //set element properties
        foreach($searchCriteria as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
        
    }
}
