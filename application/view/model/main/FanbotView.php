<?php

namespace application\view\model\main;

use \application\view\model\protocol\Indexable as Indexable;

/**
 * Description of FanbotView
 *
 * @package fanbot
 * @author coreygelbaugh
 * @version 1.0
 */
class FanbotView implements Indexable{
    
    public function __construct(){
        
    }
    /*
     * 
     */
    public function getBackground(){
        return "bg-main.jpg";
    }
    /*
     * 
     */
    public function getTitle(){
        return "Cordano :: Believe the Hype";
    }
    /*
     * 
     */
    public function getLayout(){
        return "main";
    }
    /*
     * 
     */
    public function loadView(){
        return $this;
    }
    
    /*
     * Set display fields.
     */
    public function deriveFields(){
        
        foreach($values as $field => $value){
            $this->fields[$field] = $value;
        }
    }
    /*
     * 
     */
    public function defineActions(){
        
    }
    /*
     * 
     */
    public function loadCollection($collection=""){
        
        if($collection and in_array($collection,$this->featureContent)){
            $collectionClass = "\\application\\view\\model\\players\\".$collection;
            return new $collectionClass($this->player);
        }
        else{ //load all player collections
            $this->features[] = new $collectionClass($this->player);
        }
    }
    
    public function loadFeature($feature=""){
        
        if($feature and in_array($feature,$this->featureContent)){
            $featureClass = "\\application\\view\\model\\players\\".$feature;
            return new $featureClass($this->player);
        }
        else{ //load all player features
            $this->features[] = new $featureClass($this->player);
        }
    }
    
    public function jsonSerialize() {
        
    }
}
