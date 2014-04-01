<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    use application\model\protocol\Filterable as Filterable;
    
    
    use application\view\model\games\GameView as ElementView;
    use application\view\model\games\GameCreator as ManagerView;
    use application\view\model\games\GamesView as CollectionView;
    use application\view\model\main\FanbotView as FanbotView;
    
    
    use application\view\model\protocol\Indexable as Indexable;
    use application\view\model\protocol\Deployable as Deployable;
    
    /*
    * Controller for executing game requests.
    * 
    * @package games
    * @author coreygelbaugh
    * @version 1.0
    */
    Class GameController extends CDController
    {
        
        
        
        public function __construct(){
            
            parent::construct();
            
            if($this->request->idGame){
                
                if($this->request->role){
                    $this->domainState = new GameCreator($this->request->idGame,$this->idUser,$this->request->role);
                }
                else{
                    $this->domainState = new Game($this->request->idGame,$this->idUser);
                }
            }
            else{
                $this->domainState = new GamesCollection($this->idUser);
            }
        }
        private function getGameInfo(){
            $gameInfo=[];
            $gameInfo["idGame"] = $this->drCordano->request["idGame"];
            $gameInfo["venue"] = $this->drCordano->request["args"]->venue;
            $gameInfo["startTime"] = $this->drCordano->request["args"]->startTime;
            return ($gameInfo);
        }
        
        public function index(){
            
        }
        
        public function view(){
            
        }
        
        private function interact($idGame,$action){
            $game=new Game($idGame);
            $game->$action($idUser);
        }
        
        private function manage($game){
            
        }
        
        private function create($gameInfo){
            
        }
    }