    <?php
    namespace application\view\widgets;
    use application\view\CDView as CDView;
    use application\view\widgets\protocol\Includeable as Includeable;
    /*
     * Class all view Cordano Sports inline view widgets. 
     * 
     * @package view
     * @version 1.0
     * @author Corey Gelbaugh
     */
    Class Widget extends CDView implements Includeable{
        public $htmlTags = ["div","p"];
        /*
         * @param application\view\Template
         */
        protected $template;
        /*
         * @param string[]
         */
        protected $html=[];
        
        public function __construct($textString){
            
            parent::__construct();
            $htmlString = $this->setHtml($textString);
        }
        
        public function setHtml($htmlString,$wrapper,$class=[],$newline=FALSE){
        
            $cleanHtmlString = $this->cleanHtmlString($htmlString);
            $this->html[] = setHtmlWrapper($htmlString,$wrapper,$class);
        }

        public function setHtmlWrapper($htmlString,$htmlTag,$class=[]){
            if(in_array($htmlTag,$this->htmlTags)){
                $this->html[] = "<$htmlTag>".$htmlString."</$htmlTag >";
            }
        }
        
        /*
         * Build template tree to display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        protected function getTemplate($tmplFile=NULL){
            //Since widgets have no subviews, the template simply echoes the array of html content strings.
            $this->template = new Template($this->html,$tmplFile);
        }
        
        
}