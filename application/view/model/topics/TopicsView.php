<?php 
    namespace application\view\model\collections;
    use \application\view\collections\Listable as Listable;
    use \application\view\containers\Pageable as Pageable;
    /*
    * Class for displaying collections.
    *
    * @package main
    * @version 1.0
    * @author coreygelbaugh
    */
   class TopicsView implements Listable,Pageable
   {
       /*
        * @param string|array
        */
       public $context=NULL;
       /*
        * @param string|array
        */
       public $class=NULL;
       /*
        * @param string|array
        */
       public $factor=NULL;
       /*
        * @param CDCollection
        */
       private $model;
       /*
        * @param CDElement[]
        */
       private $data;
       /*
        * @param ElementView[]
        */
       private $rows;
       
       public function __construct($model){
           $this->model=$model;
           $this->getRowData();
       }
       /*
        * 
        */
       public function loadChildren(){
            $this->children["topic"]=new TopicView($this->topics);
            $this->children["leagues"]=new LeaguesView($this->topics);
            $this->children["teams"]=new TeamsView($this->topics);
            $this->children["players"]=new PlayersView($this->topics);
            $this->children["games"]=new GamesView($this->topics);
       }
       
       public function formatView($type){
           switch($type){
               case "list":
                   break;
               case "page":
                   break;
               default:
                return NULL;
           }
       }
       
       public function getRowData(){
           $this->data = $this->model->filter($this->context,$this->class,$this->factor);
       }
       
       public function renderRowView(){
           foreach($this->data as $element){
               
           }
       }
       
       public function getPages(){
            $subviews=[];
            $subviews[]=new ScrollView(new TopicView($this->topics));
            $subviews[]=new ScrollView(new LeaguesView($this->leagues));
            $subviews[]=new ScrollView(new TeamsView($this->teams));
            $subviews[]=new ScrollView(new PlayersView($this->players));
            $subviews[]=new ScrollView(new LeaguesView($this->leagues));
            return $subviews;
       }
      
   }