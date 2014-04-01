<?php
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
     * Summary of a player's statistical averages and totals with respect
     * to some set of games.
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class StatSheet extends Stats implements Collectible
    {
        use TableView;
        /*
         * Get generating statline data.
         * 
         * @Return \Stats\Statline[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function edit()
        {
            
        }
        public function derive()
        {
            
        }
    }
?>