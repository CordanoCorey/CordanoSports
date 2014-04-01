<?php
namespace application\model\db;

/*
* Trait that handles communication with the database.
* 
* @package main
* @version 1.0
* @author coreygelbaugh
*/
Trait DbCxn
{
    private $cxn=NULL;
    
    /*
     * Connect to the localhost server.
     */
    private function connect_to_server()
    {
            $cxn = mysqli_connect("162.242.242.13","root","nyKnicks4230","CDdb")
                            OR die("error");
            return $cxn;
    }
    
    
    public function executeQuery($query,$closeCxn=TRUE)
    {
        //connect to the databse
        if(!$this->cxn){
            $cxn=$this->connect_to_server();
        }
        else{
            $cxn=$this->cxn;
            $this->cxn=NULL;
        } 
        
        //execute the query
        $result=mysqli_query($cxn,$query);
        mysqli_free_result($result);
        
        //close or store the database connection object
        if($closeCxn){
            mysqli_close($cxn);
        }
        else{
            $this->cxn=$cxn;
        }
        
        return $result;
    }
}
