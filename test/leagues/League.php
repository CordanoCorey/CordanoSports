<?php 
    namespace application\model\elements\leagues;
    /*
     * 
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class League
    {
        public $idLeague;
        public $name;
        public $status;
        
        public function __construct($id,$name,$status)
        {
            $this->idLeague=$id;
            $this->name=$name;
            $this->status=$status;
        }
                
    }
?>