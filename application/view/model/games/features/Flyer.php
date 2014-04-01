<?php 
    namespace application\view\model\games\features;
    use \application\model\games\Game as Game;
    use \application\view\model\protocol\Deployable as Deployable;
    use \application\view\elements\protocol\Collectible as Collectible;
    
    /*
     * Flyers are previews of events that can be distributed to potential 
     * attendees.
     * 
     * @package events
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Flyer implements Deployable,Collectible
    {
        public function deriveFields(){
            
        }
        
        public function defineActions(){
            
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
    
        public function jsonSerialize(){
            
        }
    }
?>