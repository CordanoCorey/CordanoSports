<?php

namespace application\library\data;

/**
 * An instance of the DbQuery class represents a subquery of a single database
 * table. These subqueries are nested within the main database query to be 
 * executed by one of the Cordano sports elements.
 *
 * @package data
 * @author coreygelbaugh
 * @version 1.0
 */
class DbQuery {
    
    
    public $selectColumns=[];
    public $fromTable="";
    public $joinOn=[];
    public $whereRowsMatch=[];
    
    public function selectColumns($queryString){
        
    }
    
    public function fromTable($queryString){
        
    }
    
    public function whereRowsMatch($queryString){
        
    }
}
