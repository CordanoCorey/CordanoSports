<?php
    namespace application\model\hype\commentary;
    use application\model\hype\Hype as Hype;
    /*
     * Comment: Responses to news stories that are 140 characters are less.
     * 
     * Message: Private comment made from one user to another user.
     * 
     * Quote: Text content that a user attributes to another user or directory element.
     * 
     * @Package Commentary
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Comment extends Hype implements \Axiomatic,\Primitive
    {
        use Properties;
        
        /*
         * @param string Either message, quote, or NULL for general comments
         */
        public $commentType=NULL;
        
        public function __construct($info=[]){
            $this->updateInfo($info);
        }
        
        public function create(){
            
        }
        
        public function update(){
            
        }
        
        public function reload(){
            
        }
    }
?>