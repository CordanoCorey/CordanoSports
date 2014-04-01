<?php
/**
 * Description of WebAnalyticsService
 *
 * @package services
 * @author coreygelbaugh
 * @version 1.0
 */
class LocationService {
    /*
     * Get the longitude and latitude coordinates of an address.
     * 
     * @param string $address
     */
    function getLatLong($address){ 
        if (!is_string($address))die("ERROR! - Invalid Address!"); 
        $_url = sprintf('http://maps.google.com/maps?output=js&q=%s',rawurlencode($address)); 
        $_result = false; 
        if($_result = file_get_contents($_url)) { 
            if(strpos($_result,'errortips') > 1 || strpos($_result,'Did you mean:') !== false){
                return false; 
            }
            preg_match('!center:\s*{lat:\s*(-?\d+\.\d+),lng:\s*(-?\d+\.\d+)}!U', $_result, $_match); 
            $_coords['lat'] = $_match[1]; 
            $_coords['long'] = $_match[2]; 
        }
        return $_coords; // returns an array $_coords['lat'], $_coords['long'] 
    }
    
    function detect_city($ip) {
        
        $default = 'UNKNOWN';

        if (!is_string($ip) || strlen($ip) < 1 || $ip == '127.0.0.1' || $ip == 'localhost')
            $ip = '8.8.8.8';

        $curlopt_useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)';
        
        $url = 'http://ipinfodb.com/ip_locator.php?ip=' . urlencode($ip);
        $ch = curl_init();
        
        $curl_opt = array(
            CURLOPT_FOLLOWLOCATION  => 1,
            CURLOPT_HEADER      => 0,
            CURLOPT_RETURNTRANSFER  => 1,
            CURLOPT_USERAGENT   => $curlopt_useragent,
            CURLOPT_URL       => $url,
            CURLOPT_TIMEOUT         => 1,
            CURLOPT_REFERER         => 'http://' . $_SERVER['HTTP_HOST'],
        );
        
        curl_setopt_array($ch, $curl_opt);
        
        $content = curl_exec($ch);
        
        if (!is_null($curl_info)) {
            $curl_info = curl_getinfo($ch);
        }
        
        curl_close($ch);
        
        if ( preg_match('{<li>City : ([^<]*)</li>}i', $content, $regs) )  {
            $city = $regs[1];
        }
        if ( preg_match('{<li>State/Province : ([^<]*)</li>}i', $content, $regs) )  {
            $state = $regs[1];
        }

        if( $city!='' && $state!='' ){
          $location = $city . ', ' . $state;
          return $location;
        }else{
          return $default; 
        }
        
    }
}
