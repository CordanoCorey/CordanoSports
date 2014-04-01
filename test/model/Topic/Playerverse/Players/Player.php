<?php
    namespace Players;
    /*
     * All players in the directory share the methods and attributes
     * of this class. 
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Player implements \Featurable,\Manageable,\Visitable
    {
        use Hierarchy;
        use Features;
        use DatabaseConnection;
        public function __construct()
        {
            $this->getSource();
        }
        /*
         * Get player preview.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function preview()
        {
            
        }
        /*
         * Get player overview.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function overview()
        {
            
        }
        /*
         * Load player summary.
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function summarize($view=NULL)
        {
            
        }
        /*
         * 
         *
         * @Return array
         * @Throws EmptyFeatureException
         */
        public function getSpecs()
        {
            
        }
        /*
         * Load the Player Developer app.
         * 
         * @Param
         * @Return PlayerDeveloper
         * @Throws
         */
        public function manage($user,$role=NULL)
        {
            if($role){
                return new $role($this);
            }
            else{
                return new PlayerDeveloper($this);
            }
        }
        /*
         * Load player Trophy Room.
         * 
         * @Param
         * @Return TrophyRoom|\Collection\Games|Numbers|Showcase
         * @Throws
         */
        public function visit($controller,$role=NULL)
        {
            switch($controller){
                case "Games":
                    //Load Games view controller
                    break;
                case "Numbers":
                    //Load Numbers view controller
                    break;
                case "Showcase":
                    //Load Showcase view controller
                    break;
                default:
                    //Load Trophy Room
                    return new TrophyRoom($this->manage($user,$role));
            }
        }
        /*
         * Add player to collection.
         * 
         * @Param
         * @Return
         * @Throws
         */
        public function add()
        {
            
        }
        /*
         * Drop player from collection.
         * 
         * @Param
         * @Return
         * @Throws
         */
        public function drop()
        {
            
        }
    }
?>