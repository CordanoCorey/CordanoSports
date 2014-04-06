<?php
namespace application\view\model\games;

use \application\games\game as Game;

use \application\view\model\protocol\Indexable as Indexable;
use \application\view\containers\protocol\Pageable as Pageable;
use \application\view\elements\protocol\Collectible as Collectible;

use \application\view\containers\PageView as PageView;
/**
 * Class that models the views for a single game.
 *
 * @package games
 * @author coreygelbaugh
 * @version 1.0
 */
class GameView implements Indexable,Pageable,Collectable {
    
    /*
     * @param Game
     */
    private $game;
    
    
    public function __construct($game,$parent=NULL){
        $this->game = $game;
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
        return "in-game.php";
    }
    /*
     * 
     */
    public function loadView(){
        return new ModalView($this,"templates/views/containers/in-game-view.php");
    }
    public function loadCollection($collection=""){
        
        if($collection and in_array($collection,$this->featureContent)){
            $collectionClass = "\\application\\view\\model\\games\\".$collection;
            return new $collectionClass($this->game);
        }
        else{ //load all game collections
            $this->collections[] = new $collectionClass($this->game);
        }
    }
    
    public function loadFeature($feature=""){
        
        if($feature and in_array($feature,$this->featureContent)){
            $featureClass = "\\application\\view\\model\\games\\".$feature;
            $this->features[] = new $featureClass($this->game);
        }
        else{ //load all game features
            $this->features[] = new $featureClass($this->game);
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
    
    public function setCellTitle(){
        return $this->game->rivalry." @ ".$this->game->venue;
    }
    
    public function setCellSubtitle(){
        return $this->game->date." @ ".$this->game->startTime;
    }
    
    public function setCardHeadline(){
        return new CellView($this,"gamecell.php");
    }
    
    public function setCardProfile(){
        
    }
    
    public function setCardReview(){
        
    }
}
