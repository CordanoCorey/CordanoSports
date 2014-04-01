<?php
namespace application\view\model\leagues;

use \application\model\leagues\league as League;

use \application\view\model\protocol\Indexable as Indexable;
use \application\view\containers\protocol\Pageable as Pageable;
use \application\view\elements\protocol\Collectible as Collectible;

use \application\view\containers\PageView as PageView;
/**
 * Class that models the views for a single league.
 *
 * @package leagues
 * @author coreygelbaugh
 * @version 1.0
 */
class LeagueView implements Indexable,Pageable {
    
    protected $league;
    
    public function __construct($league,$parent=NULL){
        $this->league = $league;
    }
    
    public function loadCollection($collection=""){
        
        if($collection and in_array($collection,$this->featureContent)){
            $collectionClass = "\\application\\view\\model\\".$collection;
            return new $featureClass($this->league);
        }
        else{ //load all league collections
            $this->features[] = new $featureClass($this->league);
        }
    }
    
    public function loadFeature($feature=""){
        
        if($feature and in_array($feature,$this->featureContent)){
            $featureClass = "\\application\\view\\model\\leagues\\".$feature;
            $this->features[] = new $featureClass($this->league);
        }
        else{ //load all league features
            
        }
    }
    
    
    
    public function loadView(){
        
    }
    
    public function includeLayout(){
        
    }
    
    /*
     * 
     */
    public function deriveFields(){
            
    }
    /*
     * 
     */
    public function defineActions(){

    }
    /*
     * 
     */
    public function jsonSerialize(){
            
    }
    
    /*
     * 
     */
    public function getPageLabels(){
        
        //the number of pages will be the number of collections that are loaded adding one for the player frontpage
        return count($this->collections) + 1;
    }
    /*
     * 
     */
    public function getPageInventory(){
        
        
    }
    /*
     * 
     */
    public function getPageFeatures(){
        
        
    }
    /*
     * 
     */
    public function getPageContent($pageId){
        
        switch($pageId){
            case "player":
                return new ScrollView($this->collections["hype"]);
            case "games":
                return new ScrollView($this->collection["teams"]);
            case "stats":
                return new ScrollView($this->collection["players"]);
            case "showcase":
                return new ScrollView($this->collection["games"]);
            case "trophyroom":
                return new ScrollView($this->collection["boardroom"]);
        }
        
    }
}
