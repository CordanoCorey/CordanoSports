<?php
    namespace Teams;
    /*
     * All teams in the directory share the methods and attributes
     * of this class. 
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Team implements \Hierarchical,\Featureable,\Manageable,\Visitable,\Joinable,\Followable
    {
        use Hierarchy;
        use Features;
        public function __construct()
        {
            $this->getSource();
        }
        /*
         * Method for teams to join league.
         * 
         * @Param int $idPlayer
         * @Return 
         * @Throws 
         */
        public function join($idPlayer)
        {
            
        }
        /*
         * Method for teams to leave league.
         * 
         * @Param int $idPlayer
         * @Return 
         * @Throws 
         */
        public function leave($idPlayer)
        {
            
        }
        /*
         * Get team preview.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function preview()
        {
            
        }
        /*
         * Get team overview.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function overview()
        {
            
        }
        /*
         * Load team summary.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function summarize($view=NULL)
        {
            
        }
        /*
         * Load team frontpage.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function getSpecs()
        {
            
        }
        /*
         * Load the Team Builder app.
         * 
         * @Param User $user
         * @Param string $role Role assumed within Team Builder.
         * @Return LeagueManager
         * @Throws BlockedException
         */
        public function manage($user,$role=NULL)
        {
            if($role){
                return new $role($this);
            }
            else{
                return new TeamBuilder($this);
            }
        }
        /*
         * Load team Locker Room.
         * 
         * @Param User $user
         * @Param string $role Role assumed by user within Team Builder.
         * @Return LockerRoom|\PlayersViewController|\GamesViewController|Numbers
         * @Throws BlockedException
         */
        public function visit($controller,$role=NULL)
        {
            switch($controller){
                case "Players":
                    //Load Players view controller
                    break;
                case "Games":
                    //Load Games view controller
                    break;
                case "Numbers":
                    //Load Numbers view controller
                    break;
                default:
                    //Load Locker Room
                    return new LockerRoom($this->manage($role));
            }
        }
        /*
         * Submit a review about a team.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function review()
        {
            
        }
        public function follow($idUser)
        {
            
        }
        public function block($idUser)
        {
            
        }
    }
?>