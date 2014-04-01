    <?php
    namespace application\view\widgets;
    use application\view\CDView as CDView;
    use application\view\widgets\protocol\Includeable as Includeable;
    /*
     * 
     * 
     * @package menus
     * @version 1.0
     * @author Corey Gelbaugh
     */
    Class InventoryMenu extends CDView implements Navigational{
        /*
         * @param application\view\Template
         */
        protected $template;
        /*
         * @param string[]
         */
        protected $inventoryLabels=[];
        /*
         * @param string[]
         */
        protected $inventoryLinks=[];
        
        public function __construct($htmlString){
            $this->html = $this->setHtml($htmlString);
        }
        
        public function setContent(){
            
        }
        
        public function setLinks(){
            
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