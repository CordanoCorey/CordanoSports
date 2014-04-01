<?php

namespace application\professor;

/**
 * The Aliaser reads from the json library and writes to the database aliases
 * that have been matched to objects.
 *
 * @package professor
 * @author coreygelbaugh
 * @version 1.0
 */
class Aliaser {
    
    /*
     * Gets a subset of words from a string.
     */
    function get_words($string, $max, $offset = 0, $append_dots = true){ 
        $words = explode(" ", $string); 
        return 
            ($append_dots && $offset > 0 ? " ... " : "") .  
            implode(" ", array_splice($words, $offset, $max)) .  
            ($append_dots && $max < count($words) ? " ... " : ""); 
    }
}
