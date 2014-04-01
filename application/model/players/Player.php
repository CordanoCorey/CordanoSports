<?php
namespace application\model\elements;


/**
 * Description of Player
 *
 * @package players
 * @author coreygelbaugh
 * @version 1.0
 */
class Player implements Axiomatic{
    
    use DbCxn;
    use Properties;
    
    public $identifier;
    public $playerName;
    public $sports=[];
    public $status="";
    public $bio="";
    
    public function __construct($playerInfo=[])
    {
        //set attributes
        foreach($playerInfo as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
    }    
}
