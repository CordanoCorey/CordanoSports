<?php
    namespace application\view\model\hype;
    use application\view\model\collections\HypeView as HypeView;
    /*
     * A storyline profiles a single hype instance, treating it as the starting
     * point of a "storyline" and using all relevant Cordano hype contributions
     * to follow the story.
     * 
     * @package hype
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Storyline extends HypeView implements Featurable
    {
        
        public function __construct($hype){
            
        }
    }
?>