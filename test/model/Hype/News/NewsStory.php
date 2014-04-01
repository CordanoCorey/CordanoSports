<?php 
    namespace News;
    /*
     * Headline that joins topics to commentary.
     * 
     * @Package News
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class NewsStory extends \Hype implements \Axiomatic,\Manageable,\Reviewable
    {
        use Properties;
        use Factors;
        public function __construct()
        {
            $this->getSource();
        }
        /*
         * Get the complete storyline associated with this news story,
         * if available.
         * 
         * @return array
         */
        function getStoryline()
        {
            
        }
    }
?>