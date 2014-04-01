<?php
    namespace application\view\model\hype\news;
    use application\view\model\collections\HypeView as HypeView;
    /*
     * A storyline is all news posted within a given topic. It's purpose is
     * to allow users to view a news story's development from start to finish.
     * 
     * @package news
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Storyline extends HypeView
    {
        use ListView;
        private $news;
    }
?>