<?php

namespace application\view\model\players\player;

use \application\model\players\Player as Player;

use \application\view\model\protocol\Indexable as Indexable;
use \application\view\containers\protocol\Pageable as Pageable;

use \application\view\containers\PageView as PageView;


/**
 * Class that models the views for a single player.
 *
 * @package players
 * @author coreygelbaugh
 * @version 1.0
 */
class PlayerView implements Indexable,Pageable {
    /*
     * @param application\model\elements\Player
     */
    protected $player;
    /*
     * @param application\view\model\collections\Listable
     */
    public $collections=[];
    /*
     * @param application\view\model\Deployable
     */
    public $features=[];
    /*
     * @param array
     */
    public $fields=[];
    
    
    
    
    
    /*
     * 
     */
    public function __construct($player,$context){
        $this->player = $player;
        $this->context = $context;
    }
    /*
     * 
     */
    public function getBackground(){
        return "bg-signed-in.jpg";
    }
    /*
     * 
     */
    public function getTitle(){
        return "Cordano :: Believe the Hype";
    }
    /*
     * 
     */
    public function getLayout(){
        return "player-layout.php";
    }
    /*
     * 
     * 
     * @param $window Object describing the frame the view has to display itself
     */
    public function loadView($window){
        return new PageView($this,$window);
    }
    /*
     * Set display fields.
     */
    public function deriveFields(){
        
        foreach($values as $field => $value){
            $this->fields[$field] = $value;
        }
    }
    /*
     * 
     */
    public function defineActions(){
        
    }
    /*
     * 
     */
    public function loadCollection($collection=""){
        
        if($collection and in_array($collection,$this->featureContent)){
            $collectionClass = "\\application\\view\\model\\players\\".$collection;
            return new $collectionClass($this->player);
        }
        else{ //load all player collections
            $this->features[] = new $collectionClass($this->player);
        }
    }
    
    public function loadFeature($feature=""){
        
        if($feature and in_array($feature,$this->featureContent)){
            $featureClass = "\\application\\view\\model\\players\\".$feature;
            return new $featureClass($this->player);
        }
        else{ //load all player features
            $this->features[] = new $featureClass($this->player);
        }
    }
    
    
   
    
    
    /*
     * 
     */
    public function getPageLabels($window){
        
        //the number of pages will be the number of collections that are loaded adding one for the player frontpage
        return count($this->collections) + 1;
    }
    /*
     * 
     */
    public function getPageInventory($window){
        
        
    }
    /*
     * 
     */
    public function getPageFeatures($window){
        
        
    }
    /*
     * 
     */
    public function getPageContent($pageId,$window){
        
        switch($pageId){
            case "player":
                return new ScrollView($this->collections["hype"]);
            case "games":
                return new ScrollView($this->collection["games"]);
            case "stats":
                return new ScrollView($this->collection["stats"]);
            case "showcase":
                return new ScrollView($this->collection["showcase"]);
            case "trophyroom":
                return new ScrollView($this->collection["trophyroom"]);
        }
        
    }
    
    public function jsonSerialize(){
        
    }
}
