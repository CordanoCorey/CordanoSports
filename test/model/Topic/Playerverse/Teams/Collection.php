<?php 
    namespace Teams;
    /*
     * Class for collections of teams.
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Nameable,\Loadable,\Taggable,\Addable
    {
        public $class="Team";
        use HasaName;
        /*
         * Load team objects.
         * 
         * @Param array $elements Array of team data for the teams that should be loaded.
         * @Return Team[]
         * @Throws BlockedException
         */
        private function load($elements=[],$factor=NULL)
        {
            if($elements){
                foreach($elements as $id=>$teamArray){
                    $this->elements=new Team($id,$teamArray);
                }
            }
            else{
                foreach($this->data as $id=>$teamArray){
                    $this->elements=new Team($id,$teamArray);
                }
            }
        }
        /*
         * 
         * 
         * @Param int $idHype
         * @Throws BlockedException
         */
        public function tag($sender)
        {
            
        }
    }
?>