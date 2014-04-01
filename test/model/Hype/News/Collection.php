<?php 
    namespace News;
    /*
     * Class for collections of news stories.
     * 
     * @Package News
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Citeable
    {
        public static $topics=["NewsFeed","Headlines","Storyline","Billboard"];
        public static function cite()
        {
            
        }
    }
?>