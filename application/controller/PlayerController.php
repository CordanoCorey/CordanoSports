<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    use application\model\protocol\Filterable as Filterable;
    
    
    use application\view\model\players\PlayerView as ElementView;
    use application\view\model\players\PlayerDeveloper as ManagerView;
    use application\view\model\players\PlayersView as CollectionView;
    use application\view\model\main\FanbotView as FanbotView;
    
    
    use application\view\model\protocol\Indexable as Indexable;
    use application\view\model\protocol\Deployable as Deployable;
    /*
    * Controller for executing player requests.
    * 
    * @package players
    * @author coreygelbaugh
    * @version 1.0
    */
    Class PlayerController extends CDController
    {
        /*
         * 
         */
        public function __construct($request,$user){
            
            parent::construct();
            
            if($this->request->idPlayer){
                
                if($this->request->role){
                    $this->domainState = new PlayerDeveloper($this->request->idPlayer,$this->idUser,$this->request->role);
                }
                else{
                    $this->domainState = new Player($this->request->idPlayer,$this->idUser);
                }
            }
            else{
                $this->domainState = new PlayersCollection($this->idUser);
            }
        }
        /*
         * 
         */
        private function manage(){
            
            $manager = new Manager($this->user,$this->domainState);
            if($this->request->role){
                $manager->setRole($this->request->role);
            }
            return $manager;
        }
        /*
         * 
         */
        private function search(){
            
            
            $collection = new Collection($this->user);
            $collection->setCriteria($this->request->args);
            $this->professor->search($collection);
        }
    }