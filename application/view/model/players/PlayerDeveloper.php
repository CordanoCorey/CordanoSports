<?php

namespace application\view\model\players\manager;

/**
 * 
 *
 * @package players
 * @author coreygelbaugh
 * @version 1.0
 */
class PlayerDeveloper implements Indexable,Responsive{
    /*
     * 
     */
    public function getBackground(){
        return "bg-signed-in.jpg";
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
        return "player-developer.php";
    }
    /*
     * 
     */
    public function loadView(){
        return new AppView($this);
    }
}
