<?php 
    namespace application\view\model\hype\plays;
    use \application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use \application\view\model\protocol\Deployable as Deployable;
    use \application\view\collections\protocol\Tabular as Tabular;
    /*
     * A collection of only game-winning plays.
     * 
     * @package plays
     * @version 1.0
     * @author coreygelbaugh
     */
    Class GameWinners extends HypeCollectionView implements Deployable,Tabular
    {
        public function __construct($hypeCollection){
            
            parent::construct();
            
            $playcalls = $hypeCollection->filter("plays","playcalls");
            
            foreach($playcalls as $playcall){
                $this->playcalls[] = new PlayCall($playcall->idHype);
            }
        }
        
        public function setFields(){
            $this->cellTitles() = "";
            $this->tableColumns["Time Left on Clock"] = $this->plays->profile(["gametime"]);
        }
        
        public function defineActions(){
            
        }
        
        public function jsonSerialize(){
            
        }
        
        public function getTableHeading(){
            
        }
        
        public function getTableColumns(){
            
        }
        
        public function getTableRows(){
            
        }
    }