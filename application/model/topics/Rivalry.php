<?php
    namespace Rivalries;
    /*
     * Class to describe the inner workings of a sports rivalry.
     * While the Playerverse class contains displays for representing
     * affiliations between directory elements, the Rivalry class
     * does the opposite - it represents the ongoing tension between
     * players or between teams. It is a manifestation of the rivalry
     * that every set of non-affiliated elements is assumed to have 
     * between them, with an emphasis on the most highly profiled 
     * rivalries in the Cordano Playerverse.
     * 
     * @Package Rivalries
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Rivalry extends \Playerverse implements \Axiomatic,\Manageable,\Featureable
    {
        use Properties;
        use Features;
        public function __construct()
        {
            $this->getSource();
        }
        /*
         * Load the Challenger app.
         * 
         * @Param @Param User $user
         * @Param string $role Role assumed within Challenger.
         * @Return Challenger
         * @Throws 
         */
        public function manage($user,$role=NULL)
        {
            if($role){
                return new $role($this);
            }
            else{
                return new Challenger($this);
            }
        }
        
    }
?>