<?php
    namespace application\library\factory;
    /*
     * This class is responsible for completely specifying the dynamic
     * structure of the site of the site for quick reference purposes so 
     * that we do not have to access the database to know which navigation 
     * options to display.
     * 
     * @package main
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Registry
    {
        /*
         * Returns the complete class hierarchy of an object or a class name.
         */
        public function getClassHierarchy($obj){ 
            if(is_object($obj)){ 
                $class = get_class($obj); 
            } 
            elseif(!class_exists($obj)){ 
                throw new InvalidArgumentException("class $obj is not defined" ); 
            } 
            $hierarchy = array(); 
            while($class){ 
                $hierarchy[] = $class; 
                $class = get_parent_class($class); 
            } 
            return $hierarchy; 
        }
        
        
    }
?>