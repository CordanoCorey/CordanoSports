<?php
namespace application\model\elements;

/**
 * 
 * @package main
 * @author coreygelbaugh
 * @version 1.0
 */
class User implements Axiomatic,Contextual,Featurable{
    
    use DbCxn;
    use Properties;
    
    protected $idUser;
    protected $userName;
    protected $joinTime;
    
            
    public function __construct($idUser){
        
    }
    
    /*
     * 
     */
    public function reload($dbQuery){
        $query = "";
    }
    
    public function getTopic($topic,$args=[]){
        switch($topic){
            case "admin":
                return $this->getAdmin($args);
            case "fantasy":
                return $this->getFantasy($args);
            case "fandom":
                return $this->getFandom($args);
            default:
                return "No such topic exists for this user.";
        }
    }
    
    private function getAdmin(){
        $topic=[];
        $topic["topics"] = $this->topics["admin"];
        $topic["leagues"] = $this->leagues["admin"];
        $topic["teams"] = $this->teams["admin"];
        $topic["players"] = $this->players["admin"];
        $topic["games"] = $this->games["admin"];
        $topic["hype"] = $this->hype["admin"];
        return $topic;
    }
    
    private function getFantasy(){
        $topic=[];
        $topic["topics"] = $this->topics["fantasy"];
        $topic["leagues"] = $this->leagues["fantasy"];
        $topic["teams"] = $this->teams["fantasy"];
        $topic["players"] = $this->players["fantasy"];
        return new Topic($topic);
    }
    
    private function getFandom(){
        $topic=[];
        $topic["topics"] = $this->topics["fandom"];
        $topic["leagues"] = $this->leagues["fandom"];
        $topic["teams"] = $this->teams["fandom"];
        $topic["players"] = $this->players["fandom"];
        return new Topic($topic);
    }
}
