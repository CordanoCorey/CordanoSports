<?php
namespace application\model\elements;

/**
 * 
 * @package teams
 * @author coreygelbaugh
 * @version 1.0
 */
class Team implements Axiomatic,Contextual,Featurable{
    
    use DbCxn;
    use Properties;
  
    public function __construct($teamInfo=[]){
        
        //set attributes
        foreach($teamInfo as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
    }
    
    /*
     * 
     */
    public function reload($dbQuery){
        $query = "";
    }
    
}
