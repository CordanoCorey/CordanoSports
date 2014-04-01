<?php
    namespace Players;
    /*
     * Class for collections of players.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Nameable,\Loadable,\Taggable,\Addable
    {
        public $class="Player";
        use HasaName;
        /*
         * Load player objects.
         * 
         * @Param array $elements Array of player data for the players that should be loaded.
         * @Return Player[]
         * @Throws BlockedException
         */
        private function load($elements=[],$factor=NULL)
        {
            if($elements){
                foreach($elements as $id=>$playerArray){
                    $this->elements=new Player($id,$playerArray);
                }
            }
            else{
                foreach($this->data as $id=>$playerArray){
                    $this->elements=new Player($id,$playerArray);
                }
            }
        }
        /*
         * 
         * 
         * @Param int $idHype
         * @Throws BlockedException
         */
        public function tag($idHype)
        {
            
        }
    }
?>