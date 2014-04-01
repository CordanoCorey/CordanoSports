<?php
    namespace Leagues;
    /*
     * All leagues in the directory share the methods and attributes
     * of this class. 
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class League extends \Playerverse implements \Hierarchical,\Featureable,\Visitable,\Joinable
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
         * @Param int $idTeam
         * @Return 
         * @Throws 
         */
        public function join($idTeam)
        {
            
        }
        /*
         * Method for teams to leave league.
         * 
         * @Param int $idTeam
         * @Return 
         * @Throws 
         */
        public function leave($idTeam)
        {
            
        }
        /*
         * Get league preview.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function preview()
        {
            
        }
        /*
         * Get league overview.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function overview()
        {
            
        }
        /*
         * Load league summary.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function summarize($view=NULL)
        {
            
        }
        /*
         * Load league frontpage.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function getSpecs()
        {
            
        }
        /*
         * Load the League Manager app.
         * 
         * @Param User $user
         * @Param string $role Role assumed within League Manager.
         * @Return LeagueManager
         * @Throws BlockedException
         */
        public function manage($user,$role=NULL)
        {
            if($role){
                return new $role($user,$this);
            }
            else{
                return new LeagueManager($user,$this);
            }
        }
        /*
         * Load league Board Room.
         * 
         * @Param string $controller
         * @Param string $role Role assumed by user within League Manager.
         * @Return BoardRoom|\TeamsViewController|\PlayersViewController|\GamesViewController
         * @Throws BlockedException
         */
        public function visit($controller,$role=NULL)
        {
            switch($controller){
                case "Teams":
                    //Load Teams view controller
                    break;
                case "Players":
                    //Load Players view controller
                    break;
                case "Games":
                    //Load Games view controller
                    break;
                default:
                    //Load Board Room
                    return new BoardRoom($this->manage($this,$role));
            }
        }
        /*
         * Submit a review about a league.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function review()
        {
            
        }
    }
?>