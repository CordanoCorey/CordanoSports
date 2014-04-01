<?php
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
     * Rundown of all player numerical measurements that do not represent
     * game results (e.g. height, weight, 40 yard dash time, etc.)
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Dimensions extends Stats implements \Listable,\Visible,\Collaborative
    {
        use ListView;
        use Preview;
    }
?>