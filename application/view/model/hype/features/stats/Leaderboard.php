<?php 
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
     * Current team leaders in each statistical category.
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Leaderboard extends Stats implements \Listable,\Collaborative,\Derivative
    {
        use \ListView;
        public $idLeague;
         /*
         * Get generating statline data.
         * 
         * @Return \Stats\Statline[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function derive()
        {
            
        }
        public function contribute()
        {
            
        }
    }
?>