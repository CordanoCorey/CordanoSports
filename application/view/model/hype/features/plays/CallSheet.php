<?php 
    namespace application\view\model\hype\plays;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\news\plays\PlayCall as PlayCall;
    use \application\view\model\protocol\Deployable as Deployable;
    use \application\view\collections\protocol\Tabular as Tabular;
    
   /*
     * Call sheets are available to create via the Scout application. They are 
     * composed of the play calls run by a rival team.
     * 
     * @package plays
     * @version 1.0
     * @author coreygelbaugh
     */
    Class CallSheet extends HypeCollectionView implements Deployable,Tabular
    {
        private $playcalls;
        
        public function __construct($hypeCollection){
            
            parent::construct();
            
            $playcalls = $hypeCollection->filter("plays","playcalls");
            
            foreach($playcalls as $playcall){
                $this->playcalls[] = new PlayCall($hype->idHype);
            }
        }
        
        public function setFields(){
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