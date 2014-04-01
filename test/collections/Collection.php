<?php
    namespace Leagues;
    /*
     * Class for collections of leagues.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Nameable,\Loadable,\Taggable
    {
        public $class="League";
        private $leagues;
        use HasaName;
        /*
         * Load League Objects.
         * 
         * @Param array $elements Array of league data for the leagues that should be loaded.
         * @Return League[]
         * @Throws BlockedException
         */
        public function load($elements=[],$factor=NULL)
        {
            if($elements){
                foreach($elements as $id=>$leagueArray){
                    $this->elements=new League($id,$leagueArray);
                }
            }
            else{
                foreach($this->data as $id=>$leagueArray){
                    $this->elements=new League($id,$leagueArray);
                }
            }
        }
        /*
         * Tag elements from within the Hype Machine.
         * 
         * @Param int $idHype
         * @Throws BlockedException
         */
        public function tag($idHype)
        {
            
        }
    }
?>