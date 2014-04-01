<?php
    /*
     * Users can establish relationships with elements, review Media,
     * and contribute new media elements.
     * 
     * @Package Main
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class User implements Followable
    {
        use DatabaseConnection;
        public $idUser;
        public $restrictions;
        public $permissions;
        
        function __construct()
        {
            
        }
        
        /*
         * Set the $permissions and $restrictions attributes.
         */
        function getCredentials()
        {
            $query="";
            $this->executeQuery($query,TRUE);
            return $this;
        }
        /*
         * Retrieve fandom context.
         * 
         * @param string $section
         * @return array 
         */
        function getRelevant($section="",$favorite=FALSE)
        {
            
        }
        /*
         * 
         */
        function getFollowing($favorite=FALSE)
        {
            
        }
        /*
         * Follow another user.
         * 
         * @Param int $idUser
         * @Return User|Exception
         */
        public static function follow($idUser)
        {
            $query="WHERE idUser=$idUser";
            $this->executeQuery($query,TRUE);
            return $this;
        }
        /*
         * Block another user.
         * 
         * @Param int $idUser
         * @Return User|Exception
         */
        public static function block($idUser)
        {
            $query="WHERE idUser=$idUser";
            $this->executeQuery($query,TRUE);
            return $this;
        }
    }
?>