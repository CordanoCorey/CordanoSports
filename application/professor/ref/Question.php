<?php
namespace application\model\elements;
use application\model\db\protocol\Derivative as Derivative;

/**
 * Description of Question
 *
 * @package main
 * @author coreygelbaugh
 * @version 1.0
 */
class Question implements Derivative,Contextual{
    /*
     * @param string
     */
    public $searchString;
    /*
     * @param Hype[]
     */
    protected $hype;
    
    
    use Properties;
    
    public function __construct($searchCriteria){
        
        //set element properties
        foreach($searchCriteria as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
        
    }
    
    public function getAlias(){
        
    }
    public function getHype(){
        
    }
    public function setHype(){
        
    }
}
