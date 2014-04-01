<?php

namespace application\library\factory;

/**
 * 
 *
 * @package factory
 * @author coreygelbaugh
 * @version 1.0
 */
class Validator {
    /** 
    *  
    * @param String $string 
    * @return float 
    *  
    * Returns a float between 0 and 100. The closer the number is to 100 the 
    * the stronger password is; further from 100 the weaker the password is. 
    */ 
   function password_strength($string){ 
       $h    = 0; 
       $size = strlen($string); 
       foreach(count_chars($string, 1) as $v){ 
           $p = $v / $size; 
           $h -= $p * log($p) / log(2); 
       } 
       $strength = ($h / 4) * 100; 
       if($strength > 100){ 
           $strength = 100; 
       } 
       return $strength; 
   } 
   /*
    * Check whether user inputed email is valid.
    */
   public static function emailValid($string) 
    { 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string)) 
            return true; 
    }
}