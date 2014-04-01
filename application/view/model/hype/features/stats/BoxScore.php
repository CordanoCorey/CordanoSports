<?php 
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
     * Box Scores display relevant stats for the game in question.
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class BoxScore extends Stats implements Tabular
    {
        use TableView;
    }
?>