<?php 
    namespace application\view\model\games;
    use application\view\model\Deployable as Deployable;
    use application\view\elements\CellView as CellView;
    /*
     * Class for viewing collections of games.
     * 
     * @package games
     * @version 1.0
     * @author coreygelbaugh
     */
    Class GamesView extends CollectionView implements Deployable,Filterable
    {
        public $context=NULL;
        public $class="games";
        public $factor=NULL;
        /*
         * @param application/model/elements/Game[]
         */
        protected $games;
        /*
         * @param application/view/model/elements/GameView[]
         */
        protected $gameViews;
        
        public function __construct($games){
            
            $this->games = $games;
            
            //create game views
            foreach($this->games as $game){
                $this->gameViews[] = new GameView($game,$this);
            }
        }
        
        public function setListRows(){
            foreach($this->games as $game){
                return new CellView($game,"gamecell.php");
            }
        }
        
        public function onClickListRow(){
            
        }
    }