<?php

namespace application\view\model\players\player;

use \application\model\players\Player as Player;

use \application\view\model\protocol\Indexable as Indexable;
use \application\view\containers\protocol\Pageable as Pageable;
use \application\view\elements\protocol\Collectible as Collectible;

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
     * @param HypeView[]
     */
    protected $hypeView;
    
    
    
    
    
    /*
     * 
     */
    public function __construct($player,$collections=[]){
        $this->player = $player;
    }
    
    /*
     * 
     */
    public function setLayout(){
         return "templates/layouts/home.php";
    }
    /*
     * 
     */
    public function setBackground(){
        $_SESSION["background"] = "bg-signed-in.jpg";
    }
    /*
     * 
     */
    public function loadInitialView(){
        return new PageView($this,"templates/views/containers/player-page.php");
    }
    
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
