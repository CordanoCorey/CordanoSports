<?php
    namespace application\view\model\players\player;
    use application\model\Player as Player;
    use \application\view\model\protocol\Deployable as Deployable;
    use application\view\elements\Collectible as Collectible;
    /*
     * Formatted display profiling a player's on-court/field playing style.
     * 
     * @package players
     * @version 1.0
     * @author coreygelbaugh
     */
    Class ScoutingReport implements Deployable,Collectible
    {
        /*
        * 
        */
       public function deriveFields(){

       }
       /*
        * 
        */
       public function defineActions(){

       }
       /*
        * 
        */
       public function jsonSerialize(){

       }
       
       /*
        * 
        */
       public function setCardHeadline(){
           if($this->cardHeadline){
             return new TextView($this->cardHeadline);
           }
           else{
               return new TextView($this->player->playerName);
           }
       }

       /*
        * 
        */
        public function setCardProfile(){
            if(isset($this->fields["cardProfile"])){
              return new TextView($this->fields["cardProfile"]);
              unset($this->fields["cardProfile"]);
            }
            else{
                $this->fields["cellTitle"] = new ImageView($this->player->avatar);
                $this->fields["cellSubtitle"] = new TextView($this->player->bio);
                $profile = new CellView($this);
                unset($this->fields["cellTitle"]);
                unset($this->fields["cellSubtitle"]);
            }
        }

        public function setCardReview(){

        }
        /*
         * 
         */
        public function setCardBackground(){

        }
        /*
         * 
         */
        public function setElementOverview(){

        }
    }
?>