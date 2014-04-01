<?php 
    namespace Rivalries;
    /*
     * Class for collections of rivalries.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Loadable,\Taggable
    {
        public $class="rivalry";
        /*
         * Load Rivalry Objects.
         * 
         * @Param array $elements Array of rivalry data for the rivalries that should be loaded.
         * @Return Rivalry[]
         * @Throws BlockedException
         */
        public function load($elements=[],$factor=NULL)
        {
            if($rivalries){
                foreach($elements as $id=>$rivalryArray){
                    $this->elements=new Rivalry($id,$rivalryArray);
                }
            }
            else{
                foreach($this->data as $id=>$rivalryArray){
                    $this->elements=new Rivalry($id,$rivalryArray);
                }
            }
        }
        /*
         * 
         * 
         * @Param int $idHype
         * @Throws BlockedException
         */
        public function tag()
        {
            
        }
    }
?>