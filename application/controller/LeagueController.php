<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    use application\model\protocol\Filterable as Filterable;
    
    
    use application\view\model\leagues\LeagueView as ElementView;
    use application\view\model\leagues\LeagueBuilder as ManagerView;
    use application\view\model\leagues\LeaguesView as CollectionView;
    use application\view\model\main\FanbotView as FanbotView;
    
    
    use application\view\model\protocol\Indexable as Indexable;
    use application\view\model\protocol\Deployable as Deployable;
    
    /*
    * Controller for executing league requests.
    * 
    * @package leagues
    * @author coreygelbaugh
    * @version 1.0
    */
    Class LeagueController extends CDController
    {
        /*
         * @param ClientRequest $request
         */
        public function __construct($request,$user){
            
            parent::construct();
            
            if($this->request->idLeague){
                
                if($this->request->role){
                    $this->domainState = new LeagueManager($this->request->idLeague,$this->idUser,$this->request->role);
                }
                else{
                    $this->domainState = new League($this->request->idLeague,$this->idUser);
                }
            }
            else{
                $this->domainState = new LeaguesCollection($this->idUser);
            }
        }
        
        
        public function createLeague($args){
            
        }
    }