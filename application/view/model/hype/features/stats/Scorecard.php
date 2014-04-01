<?php 
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    /*
    * Some sports such as golf and boxing display game statistical outcomes
    * in the form of scorecards. For those sports, this class should be 
    * utilized in place of the box score class.
    * 
    * @package stats
    * @version 1.0
    * @author coreygelbaugh
    */
    Class Scorecard extends Stats implements Collectible
    {
        public function setCardHeadline(){
            
        }
        public function setCardBackground(){
            
        }
        public function setCardProfile(){
            
        }
        public function setCardReview(){
            
        }
        public function setElementOverview(){
            
        }
    }
?>