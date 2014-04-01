<?php

namespace application\delegate;

/**
 * Description of SecurityGuard
 *
 * @package delegate
 * @author coreygelbaugh
 * @version 1.0
 */
class SecurityGuard {
    
    /*
     * Verify the file is a GIF, JPEG, or PNG using the Exif extension
     */
    
    public function verifyImageInput(){
        $fileType = exif_imagetype($_FILES["myFile"]["tmp_name"]);
        $allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
        if (!in_array($fileType, $allowed)) {
            // file type is not permitted

        }
    }
    /*
     * Verify input file is the correct file type using exec() and the Unix file utility
     */
    public function verifyInputFileType($fileType){
        
        $mime = "application/$fileType; charset=binary";
        exec("file -bi " . $_FILES["myFile"]["tmp_name"], $out);
        if ($out[0] != $mime) {
        // file is not a of this type
            
        }
    }
    
    /*
     * access ClamAV's command line utility to scan file input for viruses
     */
    public function scanForVirus(){
        exec("clamscan --stdout " . $_FILES["myFile"]["tmp_name"], $out, $return);
        if ($return) {
            // file is infected
            
        }
    }
    
    /*
     * Filter out messages that look like spam.
     */
    function is_spam($text, $file, $split = ':', $regex = false){ 
        $handle = fopen($file, 'rb'); 
        $contents = fread($handle, filesize($file)); 
        fclose($handle); 
        $lines = explode("\n", $contents); 
        $arr = array(); 
        foreach($lines as $line){ 
            list($word, $count) = explode($split, $line); 
            if($regex) 
                $arr[$word] = $count; 
            else 
                $arr[preg_quote($word)] = $count; 
        } 
        preg_match_all("~".implode('|', array_keys($arr))."~", $text, $matches); 
        $temp = array(); 
        foreach($matches[0] as $match){ 
            if(!in_array($match, $temp)){ 
                $temp[$match] = $temp[$match] + 1; 
                if($temp[$match] >= $arr[$word]) 
                    return true; 
            } 
        } 
        return false; 
    } 
    
    /*
     * This blacklist lookup function is a modification of this snippet. 
     * The difference is, that it returns if it suspects an ip is a spammer. 
     * If 50% or more of the lookups think your a spammer, the function 
     * returns true otherwise false.
     * 
     * @param $ip Remote IP address given by $_SERVER["REMOTE_ADDR"]
     */
    function blacklist($ip){ 
        $listed = true; 
        $dnsbl_lookup = array( 
            "dnsbl-1.uceprotect.net", 
            "dnsbl-2.uceprotect.net", 
            "dnsbl-3.uceprotect.net", 
            "dnsbl.dronebl.org", 
            "dnsbl.sorbs.net", 
            "zen.spamhaus.org" 
        ); // Add your preferred list of DNSBL's 
        $lookups = count($dnsbl_lookup); 
        $total = 0; 
        if($ip){ 
            $reverse_ip = implode(".", array_reverse(explode(".", $ip))); 
            foreach($dnsbl_lookup as $host){ 
                if(checkdnsrr($reverse_ip.".".$host.".", "A")){ 
                    $total++; 
                } 
            } 
        } 
        $percent = ($total / $lookups) * 100; 
        if($percent >= 50){ 
            return true; 
        }else{ 
            return false; 
        } 
    }
}
