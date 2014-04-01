<?php
/**
 * 
 *
 * @package services
 * @author coreygelbaugh
 * @version 1.0
 */
class AnalyticsService {
    public static function getGooglePagerank($domain) {
        $url = 'http://'.$domain;
        $query="http://toolbarqueries.google.com/tbr?client=navclient-auto&ch=".self::CheckHash(self::HashURL($url)). "&features=Rank&q=info:".$url."&num=100&filter=0";
        try{
                $data= file_get_contents($query);
                $pos = strpos($data, "Rank_");
                if($pos === false){} else{
                        $pagerank = substr($data, $pos + 9);
                        return $pagerank;
                }
        }catch(Exception $e)
        {
                return 0;	
        }
 
 
    }
    
    function whois_query($domain) {
 
        // fix the domain name:
        $domain = strtolower(trim($domain));
        $domain = preg_replace('/^http:\/\//i', '', $domain);
        $domain = preg_replace('/^www\./i', '', $domain);
        $domain = explode('/', $domain);
        $domain = trim($domain[0]);

        // split the TLD from domain name
        $_domain = explode('.', $domain);
        $lst = count($_domain)-1;
        $ext = $_domain[$lst];

        // You find resources and lists 
        // like these on wikipedia: 
        //
        // <a href="http://de.wikipedia.org/wiki/Whois">http://de.wikipedia.org/wiki/Whois</a>
        //
        $servers = array(
            "biz" => "whois.neulevel.biz",
            "com" => "whois.internic.net",
            "us" => "whois.nic.us",
            "coop" => "whois.nic.coop",
            "info" => "whois.nic.info",
            "name" => "whois.nic.name",
            "net" => "whois.internic.net",
            "gov" => "whois.nic.gov",
            "edu" => "whois.internic.net",
            "mil" => "rs.internic.net",
            "int" => "whois.iana.org",
            "ac" => "whois.nic.ac",
            "ae" => "whois.uaenic.ae",
            "at" => "whois.ripe.net",
            "au" => "whois.aunic.net",
            "be" => "whois.dns.be",
            "bg" => "whois.ripe.net",
            "br" => "whois.registro.br",
            "bz" => "whois.belizenic.bz",
            "ca" => "whois.cira.ca",
            "cc" => "whois.nic.cc",
            "ch" => "whois.nic.ch",
            "cl" => "whois.nic.cl",
            "cn" => "whois.cnnic.net.cn",
            "cz" => "whois.nic.cz",
            "de" => "whois.nic.de",
            "fr" => "whois.nic.fr",
            "hu" => "whois.nic.hu",
            "ie" => "whois.domainregistry.ie",
            "il" => "whois.isoc.org.il",
            "in" => "whois.ncst.ernet.in",
            "ir" => "whois.nic.ir",
            "mc" => "whois.ripe.net",
            "to" => "whois.tonic.to",
            "tv" => "whois.tv",
            "ru" => "whois.ripn.net",
            "org" => "whois.pir.org",
            "aero" => "whois.information.aero",
            "nl" => "whois.domain-registry.nl"
        );

        if (!isset($servers[$ext])){
            die('Error: No matching nic server found!');
        }

        $nic_server = $servers[$ext];

        $output = '';

        // connect to whois server:
        if ($conn = fsockopen ($nic_server, 43)) {
            fputs($conn, $domain."\r\n");
            while(!feof($conn)) {
                $output .= fgets($conn,128);
            }
            fclose($conn);
        }
        else { die('Error: Could not connect to ' . $nic_server . '!'); }

        return $output;
    }
    
    
    /*
     * Search a body of text for the most common words.
     */
    function commonWords($string, $max = null, $file = 'stopwords.txt'){ 
        $handle = fopen($file, 'rb'); 
        $contents = fread($handle, filesize($file)); 
        fclose($handle); 
        $stopWords = explode("\n", $contents); 
        foreach($stopWords as $key => $val){ 
            $stopWords[$key] = trim($stopWords[$key]); 
        } 
        $string = preg_replace('/ss+/i', '', $string); 
        $string = trim($string); // trim the string 
        $string = preg_replace('/[^a-zA-Z0-9 -]/', '', $string); // only take alphanumerical characters, but keep the spaces and dashes tooâ?¦ 
        $string = strtolower($string); // make it lowercase 

        preg_match_all('/([a-z]*?)(?= )/i', $string, $matchWords); 
        $matchWords = $matchWords[0]; 
        foreach ( $matchWords as $key => $item ) { 
            if ($item == '' || in_array(strtolower($item), $stopWords) || strlen($item) < 3) { 
                unset($matchWords[$key]); 
            } 
        } 
        $wordCountArr = array(); 
        if ( is_array($matchWords) ) { 
            foreach ( $matchWords as $key => $val ) { 
                $val = strtolower($val); 
                if ( isset($wordCountArr[$val]) ) { 
                    $wordCountArr[$val]++; 
                } else { 
                    $wordCountArr[$val] = 1; 
                } 
            } 
        } 
        arsort($wordCountArr); 
        if($max != null){ 
            $final = array_slice($wordCountArr, 0, $max); 
        }else{ 
            $final = array_slice($wordCountArr, 0); 
        } 
        if(count($final) == 0){ 
            $final = explode(' ', $string); 
        } 
        return $final; 
    } 
}
