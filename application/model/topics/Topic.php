<?php
namespace application\model\elements;

/**
 * 
 * @package topics
 * @author coreygelbaugh
 * @version 1.0
 */
class Topic implements Axiomatic,Featurable {
    
    use DbCxn;
    use Properties;
    
    /*
     * 
     */
    public function reload($dbQuery){
        $query = "";
    }
    
    public function isWellDefined(){
        return ($this->idTopic)? TRUE:FALSE;
    }
}
