<?php

namespace application\view\model\teams\manager;

/**
 * 
 *
 * @package teams
 * @author coreygelbaugh
 * @version 1.0
 */
class TeamBuilder implements Indexable,Responsive {
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
        return "team-buider.php";
    }
    /*
     * 
     */
    public function loadView(){
        return new AppView($this);
    }
}
