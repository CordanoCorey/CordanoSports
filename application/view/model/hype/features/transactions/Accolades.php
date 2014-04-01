<?php 
    namespace application\view\model\hype\transactions;
    /*
     * History of awards and titles a player has received.
     * 
     * @package players
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Accolades extends HypeCollectionView 
    {
        public $class = "transactions";
        public $factor = "awards";
        public $awards;
        
        public function __construct($context,$hypeCollection){
            
            parent::construct();
            
            $awardsCollection = $hypeCollection->filter("transactions","awards");
            
            foreach($awardsCollection as $award){
                $this->awards[] = new PlayCall($hype->idHype);
            }
        }
    }