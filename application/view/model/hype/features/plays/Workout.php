<?php 
    namespace application\view\model\hype\plays;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\news\plays\Drill as Drill;
    /*
     * Workouts are collections of drills that can be developed
     * by trainers.
     * 
     * @package plays
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Workout extends HypeCollectionView implements Collective
    {
        public function __construct($hypeCollection){
            
            parent::construct();
            
            foreach($hypeCollection as $hype){
                if($hypeline->factor == "drill"){
                    $this->drills[] = new Drill($hypeline->idHype);
                }
            }
        }
        
        public function setFields(){
            $this->cellTitle = $this->workout->name;
            $this->cellSubtitle = "Developed by ".$this->workout->founder->name;
            $this->preview = "";
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