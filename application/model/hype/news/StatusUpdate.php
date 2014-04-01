<?php 
    namespace application\model\hype\news;
    /*
     * Status updates include any public announcement of an
     * official status change of a player, team, league, event,
     * or game.
     * 
     * @package news
     * @version 1.0
     * @author coreygelbaugh
     */
    Class StatusUpdate extends NewsStory
    {
        public function __construct($info=[]){
            $this->updateInfo($info);
        }
        
        public function create(){
            
        }
        
        public function update(){
            
        }
        
        public function reload(){
            
        }
        
        /*
         * 
         */
        function attachMultimedia()
        {
            
        }
    }
?>