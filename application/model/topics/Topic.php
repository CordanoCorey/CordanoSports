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
    
    /*
     * Update or establish a relationship between two topics.
     * 
     * @param int $idTopic2
     * @param string $status
     */
    public function updateTopicHierarchy($idTopic2,$status){
        
        $query = "INSERT INTO usernetwork (idTopic1,idTopic2,status) "
                . "VALUES ($this->idTopic,$idTopic2,'$status')"
                . "ON DUPLICATE KEY UPDATE status='$status'";
        
        return $query;
    }
    
    public function updateTopicStatus($status){
        
        $query = "UPDATE topic SET status='$status'"
                . "WHERE idTopic=$this->idTopic";
        
        return $query;
    }
    
    public function createTopic($displayName,$class,$topicHierarchy=[]){
        
        $query = "";
        $query .= "BEGIN";
        
        $query .= "INSERT INTO topic (displayName,class) "
                . "VALUES ($displayName,("
                . "SELECT idClass from class "
                . "WHERE class=$class));";
        
        if($topicHierarchy){
            $query .= $this->updateTopicHierarchy($topicHierarchy["idTopic2"],$topicHierarchy["status"]);
        }
        
        $query .= "COMMIT";
        
        return $query;
    }
}
