<?php 
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
     * Scores from around a league or from games played by a team.
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Scores extends Stats implements \Listable,\Contributory,\Live
    {
        use \ListView;
        public $idLeague;
        /*
         * Get generating score data.
         * 
         * @Return \Stats\Score[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function contribute()
        {
            
        }
    }
?>