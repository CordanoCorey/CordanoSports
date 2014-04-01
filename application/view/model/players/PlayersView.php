<?php 
    namespace application\view\model\collections;
    use application\view\model\Deployable as Deployable;
    /*
     * Class for viewing collections of players.
     * 
     * @package players
     * @version 1.0
     * @author coreygelbaugh
     */
    Class PlayersView extends CollectionView implements Featurable,Cellular
    {
        public $context=NULL;
        public $class="players";
        public $factor=NULL;
        public $namespace = "application\\view\\model\\players\\";
        public $leagueFeatures=[];
        public $teamFeatures=[];
        public $featuredFields=[];
        
        /*
         * @param application\model\players\PlayersCollection $players
         */
        public function __construct($players){
            
            $this->players = $players;
            $this->setDimension($parent);
            $this->inspectDimension();
        }
        
        /*
         * Set the context of this instance.
         * 
         * 
         */
        public function setDimension($parent){
            if($parent){
                $this->dimension = $parent;
                $this->namespace = "application\\view\\model\\".$parent."players\\";
            }
            else{
                $this->dimension = "";
                $this->namespace = "application\\view\\model\\players\\";
            }
        }
        
        public function deriveFields(){
            
            if($this->players instanceof LeaguePlayers){
                
            }
            elseif($this->players instanceof TeamPlayers){
                
                $this->features[] = new Roster($this->players);
                $this->features[] = new Roster($this->players);
                $this->players->profile();
                
            }
            elseif($this->players instanceof PlayerRivalry){
                
                $this->players->compare();
                $this->players->getStoryline();
            }
            else{
                $this->players->profile();
                $this->players->compare();
            }
        }
        /*
         * 
         */
        public function inspectDimension(){
            
            $this->collectionFeatures = $this->players->reflectDimension($this->dimension);
        }
        
        /*
         * 
         */
        public function loadFeature($context,$feature=""){
            
            //load a specific feature if it is requested
            if($feature){
                $featureClass = ucfirst($feature);
                $this->features[$feature] = new $this->dimension.$featureClass($this->players);
            }
            //otherwise load all features in the current namespace
            else{
                
            }
        }
        
        /*
        * Conform to Cellular protocol.
        */
        public function setCellTitle($title=NULL){
            if($this->cellTitle){
                return new TextView($this->cellTitle);
            }
            else{
                return new TextView($this->player->playerName);
            }
        }
        /*
         * Conform to Cellular protocol.
         */
        public function setCellSubtitle(){
            if($this->fields["cellTitle"]){
                return new TextView($this->fields["cellTitle"]);
            }
            else{
                return new TextView($this->player->status);
            }
        }
    }