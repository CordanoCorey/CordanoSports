<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace application\factory\services;

/**
 * Description of TimeService
 *
 * @author coreygelbaugh
 * @version 1.0
 */
class TimeService {
    /*
     *  Function to test for time overlap 
     * @param $start_time    A start date YYYY-MM-DD HH:MM:SS 
     * @param $end_time      An end date YYYY-MM-DD HH:MM:SS 
     * @param $times         An array of times to match against 
     * Returns true if there is an overlap false if no overlap is found 
     */
    function time_overlap($start_time, $end_time, $times){ 
        $ustart = strtotime($start_time); 
        $uend   = strtotime($end_time); 
        foreach($times as $time){ 
            $start = strtotime($time["start"]); 
            $end   = strtotime($time["end"]); 
            if($ustart <= $end && $uend >= $start){ 
                return true; 
            } 
        } 
        return false; 
    } 
    /*
     * Displays how long ago something happened, such as when something was posted. "1 day ago", "2 months ago", etc.
     */
    function prettyDate($date){ 
        $time = strtotime($date); 
        $now = time(); 
        $ago = $now - $time; 
        if($ago < 60){ 
            $when = round($ago); 
            $s = ($when == 1)?"second":"seconds"; 
            return "$when $s ago"; 
        }elseif($ago < 3600){ 
            $when = round($ago / 60); 
            $m = ($when == 1)?"minute":"minutes"; 
            return "$when $m ago"; 
        }elseif($ago >= 3600 && $ago < 86400){ 
            $when = round($ago / 60 / 60); 
            $h = ($when == 1)?"hour":"hours"; 
            return "$when $h ago"; 
        }elseif($ago >= 86400 && $ago < 2629743.83){ 
            $when = round($ago / 60 / 60 / 24); 
            $d = ($when == 1)?"day":"days"; 
            return "$when $d ago"; 
        }elseif($ago >= 2629743.83 && $ago < 31556926){ 
            $when = round($ago / 60 / 60 / 24 / 30.4375); 
            $m = ($when == 1)?"month":"months"; 
            return "$when $m ago"; 
        }else{ 
            $when = round($ago / 60 / 60 / 24 / 365); 
            $y = ($when == 1)?"year":"years"; 
            return "$when $y ago"; 
        } 
    } 
    
    /*
     * This function will take a birthday and calculate an age.
     * 
     * @param $birth Formatted as yyyy-mm-dd
     */
    function birthday($birthday){ 
        $age = strtotime($birthday); 
        if($age === false){ 
            return false; 
        } 
        list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age)); 
        $now = strtotime("now"); 
        list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); 
        $age = $y2 - $y1; 
        if((int)($m2.$d2) < (int)($m1.$d1)) 
            $age -= 1; 
        return $age; 
    }
}
