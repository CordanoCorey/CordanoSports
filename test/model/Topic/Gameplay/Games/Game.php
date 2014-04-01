<?php
    namespace Games;
    /*
    * 
    * 
    * @Package Games
    * @Version 1.0
    * @Author Corey Gelbaugh
    */
   Class Game implements \Hierarchical,\Featurable,\Manageable,\Visitable
   {
        public function __construct()
        {
            $this->getSource();
        }
        
       /*
        * Load the Game Day app.
        * 
        * @param
        * @return
        * @throws
        */
       public function manage($user,$role=NULL)
       {
            return new GameDay($user,$this,$role);
       }
       /*
        * Load In-Game.
        * 
        * @param
        * @return
        * @throws
        */
       public function visit($user,$role=NULL)
       {
           return new InGame($this->manage($user,$role));
       }
   }
?>