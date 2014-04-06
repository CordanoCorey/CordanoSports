<?php

namespace application\view\model\leagues\manager;

/**
 * Description of LeagueManager
 *
 * @package leagues
 * @author coreygelbaugh
 * @version 1.0
 */
class LeagueManager implements Indexable,Responsive{
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
        return "league-manager.php";
    }
    /*
     * 
     */
    public function loadView(){
        return new AppView($this);
    }
}
