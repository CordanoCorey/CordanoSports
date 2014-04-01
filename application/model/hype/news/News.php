<?php 
    namespace application\model\hype\news;
    use application\model\hype\Hype as Hype;
    /*
     * Headline that joins topics to commentary. 
     * 
     * News Article: Short news stories of 150-200 words.
     * 
     * News Note: Shorter news stories, 1-4 sentences.
     * 
     * News Bullet: Short lines of text highlighting interesting stats, trends, news, 
     * and matchups.
     * 
     * @package news
     * @version 1.0
     * @author coreygelbaugh
     */
    Class NewsStory extends Hype implements \Axiomatic,\Manageable,\Reviewable
    {
        use Properties;
        
        /*
         * @param string Article, bullet, or note
         */
        public $newsStoryType="";
        
        
        public function __construct($info=[]){
            $this->updateInfo($info);
        }
        
        public function create(){
            
        }
        
        public function update(){
            
        }
        
        public function reload(){
            
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