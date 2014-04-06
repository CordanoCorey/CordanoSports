<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    use application\model\protocol\Filterable as Filterable;
    
    
    use application\view\model\teams\TeamView as ElementView;
    use application\view\model\teams\TeamBuilder as ManagerView;
    use application\view\model\teams\TeamsView as CollectionView;
    use application\view\model\main\FanbotView as FanbotView;
    
    
    use application\view\model\protocol\Indexable as Indexable;
    use application\view\model\protocol\Deployable as Deployable;
    /*
    * Controller for executing team requests.
    * 
    * @package teams
    * @author coreygelbaugh
    * @version 1.0
    */
    Class TeamController extends CDController
    {
        
        
        /*
         * 
         */
        public function __construct($request){
            
            parent::construct();
            
            if($this->request->idTeam){
                
                if($this->request->role){
                    $this->domainState = new TeamBuilder($this->request->idTeam,$this->idUser,$this->request->role);
                }
                else{
                    $this->domainState = new Team($this->request->idTeam,$this->idUser);
                }
            }
            else{
                $this->domainState = new TeamsCollection($this->idUser);
            }
        }
        
        
        public function createTeam($args){
            
        }
    }