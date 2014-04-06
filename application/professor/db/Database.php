<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace application\model\db;

/** 
 * File: Database.php 
 * 
 * This class is designed to be the interface class with a database. 
 * This is currently setup to use SQL syntax however can be changed if needed in future for a different type of database. 
 * Using this class will save a lot of programming if a change was needed. 
 * Also works brilliantly for MySQL, used in 3 major projects so far :) 
 * 
 *  
 * @author     Daniel Rosser 
 * @version    1.0 
 *  
 */ 
  
  
class Database { 
    private $HOST  = "example.com"; 
    private $TABLE = "table";  
    private $USER  = ""; 
    private $PASS  = ""; 
    private $ERROR_CONNECT = "Could not connect to Database";  
    private $ERROR_QUERY   = "Could not query the Database"; 
    private $connection; 
    private $lastResult; 
     
    /** 
     * Constructor 
     * @param type - Type of connection, Read only, Write 
     */ 
    function __construct($type)  //php 5+ style constructor 
    { 
      switch ($type) {     
      case readWrite: 
          $this->USER = "username"; 
          $this->PASS = "password"; 
          break; 
      case readWriteCreate: 
          $this->USER = "username"; 
          $this->PASS = "password"; 
          break; 
      case readOnly: 
      default: 
          $this->USER = "username"; 
          $this->PASS = "password"; 
          break; 
       }        
       $this->connect(); 
    } 
     
    /** 
     * Destructor 
     */ 
    function __destruct() 
    { 
       $this->close; 
       } 
     
    /** 
     * Connect to the database 
     * @return connection 
     */ 
     
    function connect() 
    { 
       $this->connection = mysql_connect($this->HOST,$this->USER,$this->PASS) or print mysql_error($this->ERROR_CONNECT); 
       $result = mysql_select_db($this->TABLE,$this->connection); 
       return($connection); 
    }   
     
    /** 
     * Delete a row from a table 
     * @param table - Table name 
     * @param id - ID of row 
     * @return result 
     */      
    function delete($table, $id) 
    { 
       $query = "DELETE FROM $table WHERE id='$id'"; 
       $result = mysql_query($query,$this->connection) or print mysql_error($this->ERROR_QUERY); 
       return($result); 
    }  
     
    /** 
     * Delete a row from a table 
     * @param table - Table name 
     * @param idName - name of the ID row 
     * @param id - ID of row 
     * @return result 
     */ 
    function deleteSpecific($table, $idName, $id) 
    { 
       $query = "DELETE FROM $table WHERE $idName='$id'"; 
       $result = mysql_query($query,$this->connection) or print mysql_error($this->ERROR_QUERY); 
       return($result); 
    }  
     
    /** 
     * Disconnects and closes the connection with database 
     */ 
    function disconnect() 
    { 
       mysql_close($this->connection); 
    } 
     
    /** 
     * Insert fields, values into Table 
     * @param table - Table name 
     * @param fields - Fields to insert 
     * @param values - Values to insert 
     */ 
    function insert( $table, $fields, $values ) 
    { 
      $start  = "INSERT INTO $table("; 
      $middle = ") VALUES ("; 
      $end    = ")"; 
      $size   = sizeof($fields); // verify the size of the fields 
      $stringFields = ""; 
      for($i=0;$i <= ($size-1);$i++){ 
        $stringFields .= "$fields[$i]"; 
        if( $i != ($size-1) ){ 
        $stringFields .= ","; 
        } 
      } 
      $stringValues=""; 
      for( $k=0; $k <= ($size-1); $k++ ){ 
          $stringValues .= "\"$values[$k]\""; 
          if( $k != ($size-1) ){ 
            $stringValues .= ","; 
          } 
       } 
      $insert = "$start$stringFields$middle$stringValues$end";       
      $insert = str_replace('""', mysql_escape_string("NULL"), $insert); 
      $insert = str_replace('" "', mysql_escape_string("NULL"), $insert); 
      $insert= str_replace("''", "", $insert); 
      $insert = str_replace("' '", "", $insert);     
      $this->query($insert); 
    } 
     
    /** 
     * Update fields, values into Table 
     * @param table - Table name 
     * @param fields - Fields to insert 
     * @param values - Values to insert 
     * @param idName - Name of Primary Key row 
     * @param id - The unique identifier 
     */ 
    function update( $table, $fields, $values, $idName, $id ) 
    { 
      $start  = "UPDATE $table SET "; 
      $end    = " WHERE $idName=\"$id\";"; 
      $size   = sizeof($fields); // verify the size of the fields 
      $sizeV  = sizeof($values); 
      if($sizeV != $size) 
        echo "Developer Error, Size of Fields / Values are not the same- Fields:$size Values:$sizeV"; 
         
      $string = "";       
      for($i=0;$i <= ($size-1);$i++){ 
        $string .= "$fields[$i] = \"$values[$i]\""; 
        if( $i != ($size-1) ){ 
        $string .= " , "; 
        } 
      } 
      $update = "$start$string$end";          
      $update = str_replace('""', mysql_escape_string("NULL"), $update); 
      $update = str_replace('" "', mysql_escape_string("NULL"), $update); 
      $update = str_replace("''", "", $update); 
      $update = str_replace("' '", "", $update);       
      $this->query($update); 
    } 
     
    /** 
     * Use this for a SQL Query 
     * Data is stored inside $this->lastResult  
     * @param sql - SQL to query the database 
     */ 
    function query($sql) 
    { 
      if(!($this->lastResult = mysql_query($sql, $this->connection))) 
        die("MySQL Error from Query. Error: ".mysql_error()." From SQL : $sql"); 
    } 
     
    /** 
     * Fetch rows from last query 
     * @return row array 
     */ 
    function fetchRow() 
    { 
        return mysql_fetch_array($this->lastResult); 
    } 
     
    /** 
     * Fetch rows from last query 
     * @return an associative array that corresponds to the fetched row and moves the internal data pointer ahead 
     */ 
    function fetchRowAssociative() 
    { 
        return mysql_fetch_assoc($this->lastResult); 
    } 
     
     
     
    /** 
     * Number of rows in a table 
     * @param table - Table to query 
     */ 
    function number($table) 
    { 
        $query  = "SELECT * FROM $table"; 
        $result = mysql_query($query, $this->connection); 
        $number = mysql_num_rows($result); 
        return($number); 
    } 
     
    /**  
     * Return the last id of an insertion 
     * @return last id of an insertion 
     */ 
    function lastId()  
    { 
       return mysql_insert_id($this->connection);  
    }  
     
    /** 
     * Return the number of rows affected on last query 
     * @return number of rows  
     */ 
    function numberAffected()  
    { 
       $query = mysql_affected_rows(); 
       return($query); 
    } 
     
    /** 
     * Return the number of rows in the last query 
     * @return number of rows  
     */ 
    function numberOfRows() 
    {    $number = mysql_num_rows($this->lastResult); 
        return($number); 
    } 
         
    /** 
     * Return the number of rows found in a query 
     * @return number of rows 
     */ 
    function numberRows($query) 
    { 
      $result = mysql_query($query, $this->connection); 
      $number = mysql_num_rows($result); 
      return($number); 
    }   
     
}; 