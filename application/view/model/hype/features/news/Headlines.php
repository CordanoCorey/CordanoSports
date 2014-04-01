<?php
    namespace application\view\model\hype\news;
    use application\view\model\collections\HypeView as HypeView;
    /*
     * Headlines is a collection of top news stories for the given
     * page search criteria. It is a News Report content feed that
     * returns most relevant news headlines within the current context.
     * 
     * @package news
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Headlines extends NewsCollectionView implements Popular,Listable
    {
        use ListView;
        private $news;
    }
?>