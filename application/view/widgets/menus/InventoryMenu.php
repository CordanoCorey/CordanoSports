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
    Class InventoryMenu implements Includeable,Expandable{
        public $identifier = "inventory-menu";
        /*
         * @param application\view\Template
         */
        protected $template;
        /*
         * @param string[]
         */
        protected $inventoryLabels=[];
        /*
         * @param array label=>link
         */
        protected $inventoryLinks=[];
        /*
         * 
         */
        private $appLink;
        /*
         * 
         */
        private $inventoryFlyout=[];
        
        public function __construct($htmlString){
            $this->html = $this->setHtml($htmlString);
        }
        
        public function setParent($view){
            
        }
        
        public function setContent(){
            $this->inventoryFlyout = $viewModel->getInventoryFlyout();
        }
        
        /*
         * 
         */
        public function labelLinks(){
            $labels = $this->viewModel->setLabels($this->identifier);
            $links = $this->viewModel->setLinks($this->identifier);
        }
        
        
        /*
         * Build template tree to display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function setTemplate($tmplFile=NULL){
            //Since widgets have no subviews, the template simply echoes the array of html content strings.
            $this->template = new Template($this->html,$tmplFile);
        }
    }