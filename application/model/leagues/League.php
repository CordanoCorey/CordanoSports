<?php
namespace application\model\elements;

/**
 * 
 * @package leagues
 * @author coreygelbaugh
 * @version 1.0
 */
class League implements Axiomatic,Contextual,Featurable{
    
    use DbCxn;
    use Properties;
    
    public function __construct($leagueInfo=[]){
        
        //set attributes
        foreach($leagueInfo as $key=>$value){
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
