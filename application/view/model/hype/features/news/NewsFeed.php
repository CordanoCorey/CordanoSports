<?php
    namespace application\view\model\hype\news;
    use application\view\model\collections\HypeView as HypeView;
    /*
     * A user's news feed includes all posted site content that has been
     * made visible to the user.
     * 
     * @package news
     * @version 1.0
     * @author coreygelbaugh
     */
    Class NewsFeed extends HypeView
    {
        use ListView;
        private $news;
    }
?>