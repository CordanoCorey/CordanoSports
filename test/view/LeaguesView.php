<?php 
    namespace application\view\model\collections;
    /*
     * Class for viewing collections of leagues.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class LeaguesView implements Listable
    {
        /*
         * @param League[]
         */
        private $leagues;
        public $id;
        public $name;
        public $status;
        
        public function __construct($leagues)
        {
            $this->leagues=$leagues;
            foreach($this->leagues as $league){
                $this->id[]=$league->idLeague;
                $this->name[$league->idLeague]=$league->name;
                $this->status[$league->idLeague]=$league->status;
            }
        }
        public function renderRowView()
        {
            return "application\view\CellView";
        }
        
        public function getRowData()
        {
            foreach($this->id as $id){
                $rows[]=[
                            "name"=>$this->name[$id],
                            "status"=>$this->status[$id]
                        ];
            }
            return $rows;
        }
    }