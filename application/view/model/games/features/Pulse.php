<?php 
    namespace application\view\model\games\features;
    use \application\model\games\Game as Game;
    use \application\view\model\protocol\Deployable as Deployable;
    use \application\view\elements\protocol\Collectible as Collectible;
    
   /*
    * The game pulse monitors the progress of the game as well
    * as the fan reaction to occurrences.
    * 
    * @package games
    * @version 1.0
    * @author coreygelbaugh
    */
   Class Pulse extends GameView implements Deployable,Collectible,Reloadable
   {
        public function deriveFields(){
            
        }
        
        public function defineActions(){
            
        }
        
        public function jsonSerialize(){
            
        }
        
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