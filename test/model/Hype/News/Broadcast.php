<?php 
    namespace News;
    /*
     * "Broadcaster" or "Sports Reporter" of news stories. A broadcasted news 
     * story is a news story is a topic that gets shared with the site community.
     * 
     * @Package News
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Broadcast extends NewsStory implements \Managerial,\Reportable
    {
        /*
         * 
         */
        function report()
        {
            
        }
        /*
         * 
         */
        function broadcast()
        {
            
        }
        /*
         * 
         */
        function reportTransaction()
        {
            
        }
        /*
         * Share news story with facebook, twitter, etc..
         */
        function shareNewsStory($cxn,$idNews,$shareWith)
        {
            
        }
    }
?>