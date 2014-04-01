<?php
    /*
     * 
     * 
     * @Package Main
     */
    Class Topic implements Axiomatic,Deployable
    {
        use Properties;
        use EventHandler;
        use Singleton;
        use Consensus;
        
        /*
         * An array of answer objects that address this topic.
         * 
         * @var array
         */
        protected $context;
        /*
         * 
         * 
         * @var 
         */
        private $review;
        public $idTopic;
        private $playerverse;
        private $gameplay;
        private $news;
        /*
         * 
         */
        function __construct($context,$topicName=NULL)
        {
            
        }
        public function deploy($answers)
        {
            
        }
        public function review()
        {
            return $this->review;
        }
    }
    
    
?>