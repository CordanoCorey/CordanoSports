<?php
namespace application\delegate\input;

/**
 * 
 *
 * @package delegate
 * @author coreygelbaugh
 * @version 1.0
 */
class Formatter {
    
    /*
     * Takes a number and adds “th, st, nd, rd, th” after it.
     * 
     * @param int $cdnl Cardinality
     */
    public function ordinal($cdnl){ 
        $test_c = abs($cdnl) % 10; 
        $ext = ((abs($cdnl) %100 < 21 && abs($cdnl) %100 > 4) ? 'th' 
                : (($test_c < 4) ? ($test_c < 3) ? ($test_c < 2) ? ($test_c < 1) 
                ? 'th' : 'st' : 'nd' : 'rd' : 'th')); 
        return $cdnl.$ext; 
    } 
    
    function data_uri($file, $mime) {
        $contents=file_get_contents($file);
        $base64=base64_encode($contents);
        echo "data:$mime;base64,$base64";
    }
    
    /*
    * This function will return the duration of the given time period in days, hours, minutes and seconds.
    *e.g. secsToStr(1234567) would return “14 days, 6 hours, 56 minutes, 7 seconds”
    */
    function secsToStr($secs) {
        if($secs>=86400){$days=floor($secs/86400);$secs=$secs%86400;$r=$days.' day';if($days<>1){$r.='s';}if($secs>0){$r.=', ';}}
        if($secs>=3600){$hours=floor($secs/3600);$secs=$secs%3600;$r.=$hours.' hour';if($hours<>1){$r.='s';}if($secs>0){$r.=', ';}}
        if($secs>=60){$minutes=floor($secs/60);$secs=$secs%60;$r.=$minutes.' minute';if($minutes<>1){$r.='s';}if($secs>0){$r.=', ';}}
        $r.=$secs.' second';if($secs<>1){$r.='s';}
        return $r;
    }
    
    function checkDateFormat($date)
    {
        //match the format of the date
        if (preg_match ("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts))
        {
            //check weather the date is valid of not
            if(checkdate($parts[2],$parts[3],$parts[1]))
                return true;
            else
            return false;
        }
        else
            return false;
    }
    
    
    function ago($time) {
	$diff = time() - (int)$time;
 
	if ($diff == 0) {
		return 'Just now';
	}
 
	$intervals = array(
		1 => array('year', 31556926),
		$diff < 31556926 => array('month', 2628000),
		$diff < 2629744 => array('week', 604800),
		$diff < 604800 => array('day', 86400),
		$diff < 86400 => array('hour', 3600),
		$diff < 3600 => array('minute', 60),
		$diff < 60 => array('second', 1)
	);
 
	$value = floor($diff/$intervals[1][1]);
	$ago = $value.' '.$intervals[1][0].($value > 1 ? 's' : '');
 
	$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
 
	$day = $days[date('w', $time)];
 
	if ($ago == '1 day') {
		return 'Yesterday at '.date('H:i', $time);
	}
	elseif ($ago == '2 days' || $ago == '3 days' || $ago == '4 days' || $ago == '5 days' || $ago == '6 days' || $ago == '7 days') {
		return $day.' at '.date('H:i', $time);
	}
	elseif ($value <= 59 && $intervals[1][0] == 'second' ||  $intervals[1][0] == 'minute' ||  $intervals[1][0] == 'hour') {
		return $ago.' ago';
	}
	else {
		return date('M', $time).' '.date('d', $time).', '.date('Y', $time).' at '.date('H:i', $time);
	}
    }
    /*
     * Take an array, and display it in a textarea.
     */
    public function o($data, $cols = 30, $rows = 30) { //width, height 
        if (is_array($data)) { 
            echo "\n\n<textarea cols=\"".$cols."\" rows=\"".$rows."\">"; 
            print_r($data); 
            echo "</textarea>\n\n"; 
        } else { 
            echo "\n\n<textarea cols=\"".$cols."\" rows=\"".$rows."\">$data</textarea>\n\n"; 
        } 
    } 
    
    function word_count($sentence){ 
        $array = explode(" ", $sentence); 
        return count($array); 
    } 
    
    function textbetweenarray($s1,$s2,$s){ 
        $myarray=array(); 
        $s1=strtolower($s1); 
        $s2=strtolower($s2); 
        $L1=strlen($s1); 
        $L2=strlen($s2); 
        $scheck=strtolower($s); 

        do { 
            $pos1 = strpos($scheck,$s1); 
            if($pos1!==false){ 
                $pos2 = strpos(substr($scheck,$pos1+$L1),$s2); 
                if($pos2!==false){ 
                    $myarray[]=substr($s,$pos1+$L1,$pos2); 
                    $s=substr($s,$pos1+$L1+$pos2+$L2); 
                    $scheck=strtolower($s); 
                } 
            } 
        } while (($pos1!==false)and($pos2!==false)); 

        return $myarray; 
    }
    
    /*
     * if a string is longer than the defined length,  
     * it will add 3 periods to the end of the string. 
     *you can change it to what ever you want for example: 
     *return substr($str,0,$len).'[<a href="read_more.html">Read More</a>]'; 
     */
    function strLength($str,$len){ 
        $lenght = strlen($str); 
        if($lenght > $len){ 
            return substr($str,0,$len).'...'; 
        }else{ 
            return $str; 
        } 
    }
}
