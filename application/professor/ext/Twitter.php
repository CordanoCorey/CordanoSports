<?php


namespace application\delegate;

/**
 * Description of Twitter
 *
 * @author coreygelbaugh
 * @version 1.0
 */
class Twitter {
    protected $twitURL = 'http://api.twitter.com/1/'; 
    protected $xml; 
    protected $tweets  = array(), $twitterArr = array();
    
    /*
     * 
     */
    public function loadTimeline($user, $max = 20){ 
        $this->twitURL .= 'statuses/user_timeline.xml?screen_name='.$user.'&count='.$max; 
        $ch        = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $this->twitURL); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $this->xml = curl_exec($ch); 
        return $this; 
    } 
    
    /*
     * 
     */
    public function getTweets(){ 
        $this->twitterArr = $this->getTimelineArray(); 
        $tweets = array(); 
        foreach($this->twitterArr->status as $status){ 
            $tweets[$status->created_at->__toString()] = $status->text->__toString(); 
        } 
        return $tweets; 
    } 
    
    /*
     * 
     */
    public function getTimelineArray(){ 
        return simplexml_load_string($this->xml); 
    } 
    
    /*
     * 
     */
    public function formatTweet($tweet){ 
        $tweet = preg_replace("/(http(.+?))( |$)/","<a href=\"$0\">$1</a>$3", $tweet); 
        $tweet = preg_replace("/#(.+?)(\h|\W|$)/", "<a href=\"https://twitter.com/i/#!/search/?q=%23$1&src=hash\">#$1</a>$2", $tweet); 
        $tweet = preg_replace("/@(.+?)(\h|\W|$)/", "<a href=\"http://twitter.com/#!/$1\">@$1</a>$2", $tweet); 
        return $tweet; 
    } 
    
    /*
     * Get all tweets corresponding to the given hash tag.
     */
    function getHashtagTweets($hashTag) {

        $url = 'http://search.twitter.com/search.atom?q='.urlencode($hashTag) ;
        echo "<p>Connecting to <strong>$url</strong> ...</p>";
        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $xml = curl_exec ($ch);
        curl_close ($ch);

        //If you want to see the response from Twitter, uncomment this next part out:
        //echo "<p>Response:</p>";
        //echo "<pre>".htmlspecialchars($xml)."</pre>";

        $affected = 0;
        $twelement = new SimpleXMLElement($xml);
        foreach ($twelement->entry as $entry) {
            $text = trim($entry->title);
            $author = trim($entry->author->name);
            $time = strtotime($entry->published);
            $id = $entry->id;
            echo "<p>Tweet from ".$author.": <strong>".$text."</strong>  <em>Posted ".date('n/j/y g:i a',$time)."</em></p>";
        }

        return true ;
    }
    
    /* 
    * 
    * Convert text with format "@foo" to link (mentions).
    * 
    * @param string $str string with twitter nicks 
    * @param mixed string|array $allowed list of nicks allowed 
    * @param string $format template for link 
    * @param bool $toArray return matches as array or string 
    * @return mixed string|array 
    */ 
   public function parseTwitterNicks($str, $allowed = 'all', $format = 'default', $toArray = false){ 

        // capture all nicks with format @tweetnick 
        preg_match_all('~@([a-z0-9-_]+)~is', $str, $match); 

        // check template 
        if($format == 'default') 
            $format = 'profile.php?user={nick}'; 

        if(!preg_match('~\{nick\}~', $format)) 
            $format = $format . '{nick}'; 

        // have matches? 
        if(empty($match[1])) 
            return ($toArray ? array() : $str); 

        // save matches 
        $found = array(); 

        // replace matches 
        foreach($match[1] as $nick){ 
            // ignore disallowed nicks 
            if(!empty($allowed) && $allowed != 'all'){ 
                if(is_array($allowed)){ 
                    if(!in_array($nick, $allowed)) 
                        continue; 
                } 
            } 

        // text to link 
        $url = str_replace('{nick}', $nick, $format); 
        $str = str_replace('@' . $nick, '<a href="' . $url . '" title="' . $nick . '">@' . $nick . '</a>', $str); 
        $found[] = $nick; 
        }
        return ($toArray ? $found : $str); 
   }
}
