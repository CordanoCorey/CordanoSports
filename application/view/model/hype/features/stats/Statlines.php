<?php
    namespace application\view\model\hype\stats;
    use application\view\model\hype\HypeCollectionView as HypeCollectionView;
    use application\model\hype\stats\Statline as Statline;
    use \application\view\model\protocol\Deployable as Deployable;
    use \application\view\collections\protocol\Listable as Listable;
    /*
     * Rundown of a playes statlines by game or within a game by
     * game time.
     * 
     * @package stats
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Statlines extends HypeCollectionView implements Deployable,Cellular,Listable
    {
        
        
        public function setFields(){
        }
        
        public function defineActions(){
            
        }
        
        public function jsonSerialize(){
            
        }
        
        public function setCellTitle(){
            
        }
        
        public function setCellSubtitle(){
            
        }
        
        public function setAvatarImage(){
            
        }
        
        public function setElementPreview(){
            
        }
        
        public function getListHeading(){
            
        }
        
        public function getListRows(){
            
        }
        
        
    }