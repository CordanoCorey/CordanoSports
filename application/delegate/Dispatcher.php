<?php
    namespace application\config;
    /*
     * Class for sending requests to external api's.
     * 
     * @package main
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Dispatcher
    {
        /*
         * @param HttpRequest
         */
        private $httpRequest;
        
        private $statsService;
        private $locationService;
        private $webAnalyticsService;

        public function __construct(){
            
        }

        public function getOfficialStats($feed,$args){

        }

        public function checkIn($location,$time){

        }
        
        /*
         * Download a remote image and optionally save it to the server.
         */
        public function retrieveRemoteImage($url,$imgSaveDir=""){
            $image = file_get_contents("$url");
            if($imgSaveDir){
                file_put_contents($imgSaveDir, $image);
            }
            return $image;
        }
        
        public function sendEmail(){
            $to = "viralpatel.net@gmail.com";
            $subject = "VIRALPATEL.net";
            $body = "Body of your message here you can use HTML too. e.g. <br> <b> Bold </b>";
            $headers = "From: Peter\r\n";
            $headers .= "Reply-To: info@yoursite.com\r\n";
            $headers .= "Return-Path: info@yoursite.com\r\n";
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            mail($to,$subject,$body,$headers);
        }
        
        function base64url_encode($plainText) {
            $base64 = base64_encode($plainText);
            $base64url = strtr($base64, '+/=', '-_,');
            return $base64url;
        }

        function base64url_decode($plainText) {
            $base64url = strtr($plainText, '-_,', '+/=');
            $base64 = base64_decode($base64url);
            return $base64;
        }
        
        /**
        * Basic cURL wrapper function
         * 
        * @link http://snipplr.com/view/51161/basic-curl-wrapper-function-for-php/
        * @param string $url URL to fetch
        * @param array $curlopt Array of options for curl_setopt_array
        * @return string
        */
       function file_get_contents_curl($url, $curlopt = array()){
           $ch = curl_init();
           $default_curlopt = array(
               CURLOPT_TIMEOUT => 2,
               CURLOPT_RETURNTRANSFER => 1,
               CURLOPT_FOLLOWLOCATION => 1,
               CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.13) Gecko/20101203 AlexaToolbar/alxf-1.54 Firefox/3.6.13 GTB7.1"
           );
           $curlopt = array(CURLOPT_URL => $url) + $curlopt + $default_curlopt;
           curl_setopt_array($ch, $curlopt);
           $response = curl_exec($ch);
           if($response === false)
               trigger_error(curl_error($ch));
           curl_close($ch);
           return $response;
       }
    }
?>