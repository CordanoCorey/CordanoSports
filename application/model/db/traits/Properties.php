<?php
namespace application\model\db\traits;


/**
 * The properties trait is common to all model objects and is responsible
 * for storing and retrieving properties and attributes of the object.
 *
 * @package model
 * @author coreygelbaugh
 * @version 1.0
 */
trait Properties{
    /*
     * @param Topic[]
     */
    protected $topicIds;
    /*
     * @param Hype[]
     */
    protected $hypeIds;
    /*
     * 
     */
    public function setProperty($source,$collection,$element,$class=[],$factor=[],$property=[],$attr=[]){
        
    }
    /*
     * 
     */
    public function getProperty($sender,$propertyName){
        $query = "SELECT * FROM hype JOIN measure ON hype.idHype=measure.idHype";
    }
    /*
     * Set/update properties and attributes 
     */
    public function updateInfo($info){
        
        foreach($info as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
    }
    
    
   public function getNetwork($users=[],$topics=[],$hype=[],$degree=2){

       for($i=1; $i<=$degree; $i++){

       }
   }

   public function getDimension($userRelations=[],$topicRelations=[],$hypeRelations=[]){

       return [
                   "users" => $this->getRelatives("users",$userRelations),
                   "topics" => $this->getRelatives("topics",$topicRelations),
                   "hype" => $this->getRelatives("hype",$hypeRelations)
               ];
   }

   public function getRelatives($grouping,$relations=[]){

       $relatives = [];
       foreach($this->$grouping as $relation=>$idUser){
           if(in_array($relation,$relations)){
               $relatives[] = $idUser;
           }
       }
       return $relatives;
   }
   
   /*
    * 
    */
   public function define($optional=TRUE,$advanced=FALSE){
        $properties=[];
        foreach($this->getDefinition["required"] as $definingProperty){
            $properties = $this->getProperty($definingProperty);
        }
    }
    
    /*
     * 
     */
    public function createTopic($user,$topics=[]){
        $query = "insert into topic values()";
        $this->executeQuery($query);
        
    }
}
