<?php 
    namespace application\view\model\games\features;
    
    use \application\view\model\protocol\Deployable as Deployable;
    use \application\view\containers\protocol\Collective as Collective;
    
   /*
    * A draft board displays round-by-round draft picks by team. When in
    * administrative mode, users can report draft results, make predictions
    * prior to the draft about draft order, or prepare their own draft 
    * boards before a draft they will participate in.
    * 
    * @package events
    * @version 1.0
    * @author coreygelbaugh
    */
    Class DraftBoard implements Deployable,Collective
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
    }
?>