<?php
namespace application\model\games;

/**
 * 
 * @package games
 * @author coreygelbaugh
 * @version 1.0
 */
class Game implements Axiomatic,Contextual,Featurable{
    
    use DbCxn;
    use Properties;
    
    public function __construct($gameInfo=[]){
        
        $this->updateInfo($gameInfo);
    }
    
    public function create(){
            
    }

    public function update(){

    }

    public function reload(){

    }
}
