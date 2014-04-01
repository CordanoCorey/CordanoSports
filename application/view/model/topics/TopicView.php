<?php
namespace application\view\model\elements;
use \application\view\model\Cellular as Cellular;
use \application\view\model\collections\HypeView as HypeView;
/**
 * Class that models the views for a single element.
 *
 * @package topics
 * @author coreygelbaugh
 * @version 1.0
 */
class TopicView implements Cellular,Tileable,Scrollable,Deployable {
    
    /*
     * @param application\model\elements\Topic
     */
    protected $topic;
    public $tmplFile="tmpl/views/scrollview.php";
    
    /*
     * 
     */
    public function __construct($topic){
        $this->topic=$topic;
    }
    
    /*
     * 
     */
    public function loadChildren($featureClass=NULL){
        $this->children["card"]=new TopicView($this->topic);
        $this->children["leagues"]=new LeaguesView($this->topic->getLeagues);
        $this->children["teams"]=new TeamsView($this->topic->getTeams);
        $this->children["players"]=new PlayersView($this->topic->getPlayers);
        $this->children["games"]=new GamesView($this->topic->getGames);
        $this->children["hype"]=new HypeView($this->topic->getHype);
    }
    
    /*
     * 
     * 
     * @return string
     */
    public function setCellTitle(){
        return $topic->topicTitle;
    }
    /*
     * 
     * 
     * @return string
     */
    public function setCellSubtitle(){
        return $topic->status;
    }
    /*
     * 
     */
    public function getScrollerViews(){
        $subviews=[];
        $subviews[]=new CardView($this,"topiccard.php");
        $subviews[]=new ListView($this->children["hype"],"hypeview.php");
        return $subviews;
    }
}
