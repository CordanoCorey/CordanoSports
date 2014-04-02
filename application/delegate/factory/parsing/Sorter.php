<?php

namespace application\professor;

/**
 * 
 *
 * @package professor
 * @author coreygelbaugh
 * @version 1.0
 */
class Sorter {
    /*
     * Sort an object array by object attribute.
     * 
     * @param $tot Array of objects
     */
    public function sortObjByAttr($obj){
        foreach($obj as $row){ 
            $nm[] = $row->name;     
        } 

        return array_multisort($nm, SORT_ASC, $tot);
    }
    
    public function sortByTime($mostRecent=TRUE){
        
    }
    
    public function sortByRank(){
        
    }
    
}
