<?php
namespace application\view\model\games\features;
use \application\model\games\GamesCollection as Games;
use \application\view\model\GamesView as GamesView;
use \application\view\model\protocol\Deployable as Deployable;
use \application\view\collections\protocol\Tabular as Tabular;

/**
 * Creates list of upcoming games along with relevant game details.
 *
 * @package games
 * @author coreygelbaugh
 * @version 1.0
 */
class Schedule extends GamesView implements Deployable,Tabular{
    
    public $dimension=["league-games","team-games","player-games","event-games"];
    
    public function setListRows(){
        
        //set game cells to be displayed in this context
        foreach($this->gameViews as $gameView){
            $gameView->setTitle(new TextView($gameView->game->rivalry->title));
            $gameView->setSubtitle(new TextView($gameView->game->getRivalry));
        }
        
        //return cell views
        parent::setListRows();
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
   public function getTableSummary(){

   }
   /*
    * 
    */
   public function getTableColumns(){
       
   }
   /*
    * 
    */
   public function getTableRows(){

   }
}
