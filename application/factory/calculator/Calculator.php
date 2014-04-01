<?php

namespace application\professor;

/**
 * 
 *
 * @package professor
 * @author coreygelbaugh
 * @version 1.0
 */
class Calculator{
    
    /*
     * Calculate mean, median, mode, and range for an array of numbers.
     */
    function mmmr($array, $output = 'mean'){ 
        if(!is_array($array)){ 
            return FALSE; 
        }else{ 
            switch($output){ 
                case 'mean': 
                    $count = count($array); 
                    $sum = array_sum($array); 
                    $total = $sum / $count; 
                break; 
                case 'median': 
                    rsort($array); 
                    $middle = round(count($array) / 2); 
                    $total = $array[$middle-1]; 
                break; 
                case 'mode': 
                    $v = array_count_values($array); 
                    arsort($v); 
                    foreach($v as $k => $v){$total = $k; break;} 
                break; 
                case 'range': 
                    sort($array); 
                    $sml = $array[0]; 
                    rsort($array); 
                    $lrg = $array[0]; 
                    $total = $lrg - $sml; 
                break; 
            } 
            return $total; 
        } 
    } 

    /*
     * Use the latitude and longitude of two locations, and calculate the distance between 
     * them in both miles and metric units.
     */
    function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
        $theta = $longitude1 - $longitude2;
        $miles = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $miles = $miles * 60 * 1.1515;
        $feet = $miles * 5280;
        $yards = $feet / 3;
        $kilometers = $miles * 1.609344;
        $meters = $kilometers * 1000;
        return compact('miles','feet','yards','kilometers','meters'); 
    }
    
    public function getAllDividends($number){ 
        for($i=2; $i<$number; $i++){ 
            if(($number % $i == 0)){ 
                $num[] = $number / $i;     
            }  
        } 
        return $num; 
    }
}
