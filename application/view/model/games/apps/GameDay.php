<?php
    namespace Games;
   /*
    * 
    * 
    * @Package Games
    * @Version 1.0
    * @Author Corey Gelbaugh
    */
   Class GameDay implements \Deployable,\Managerial
   {
        public function deploy()
        {
            
        }
        
        public function react($idGame,$args=[]){
            
        }
        
        protected function getCurrentlocation(){
            
        }
        protected function setLocation(){
            
        }
        protected function setTimeframe(){
            
        }
        protected function create($args){
            $this->gameDay->create($args);
        }
        protected function attend(){
            
        }
        protected function checkIn($args){
            $this->gameDay->checkIn($args);
        }
   }
?>