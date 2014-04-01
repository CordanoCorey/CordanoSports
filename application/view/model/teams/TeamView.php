<?php
namespace application\view\elements;

use \application\model\teams\Team as Team;

use \application\view\model\protocol\Indexable as Indexable;
use \application\view\containers\protocol\Pageable as Pageable;
use \application\view\elements\protocol\Collectible as Collectible;

use \application\view\containers\PageView as PageView;
/**
 * Class that models the views for a single team.
 *
 * @package teams
 * @author coreygelbaugh
 * @version 1.0
 */
class TeamView implements Indexable,Pageable,Collectible {
    
    private $team;
    
    public function __construct(){
        
    }
    
    public function loadCollection($collection=""){
        
        if($collection and in_array($collection,$this->featureContent)){
            $collectionClass = "\\application\\view\\model\\teams\\".$collection;
            return new $featureClass($this->team);
        }
        else{ //load all team collections
            $this->collections[] = new $collectionClass($this->team);
        }
    }
    
    public function loadFeature($feature=""){
        
        if($feature and in_array($feature,$this->featureContent)){
            $featureClass = "\\application\\view\\model\\teams\\".$feature;
            return new $featureClass($this->team);
        }
        else{ //load all team features
            $this->features[] = new $featureClass($this->team);
        }
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
}
