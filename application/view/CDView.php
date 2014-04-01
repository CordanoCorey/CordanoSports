<?php
    namespace application\view;
    use protocol\Renderable as Renderable;
    use protocol\Designable as Designable;
    use protocol\Triggerable as Triggerable;
    use design\Designer as Designer;
    use effects\Observer as Observer;
    
    use application\library\data\EventHandler as EventHandler;
    use application\library\data\CSSRule as CSSRule;
    
    /*
     * The CDView class implements the methods common to all Cordano views.
     * 
     * The views main jobs are to:
     *      1. Set its formatting properties according to the view model's specifications.
     *      2. Set its observing properties according to the controller's specifications.
     *      3. Deliver itself to the appropriate layout or dispatcher to be rendered and delivered.
     *      4. Render its content using services and/or templates.
     *      5. Listen for user event triggers.
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class CDView implements Renderable,Designable,Triggerable
    {   
        /*
         * @param string Location of this view's default template file
         */
        public $templateFile = "";
        /*
         * @param string $divId The css selector corresponding to this div
         */
        public $selector;
        /*
        * @param Formattable
        */    
        protected $viewModel;
        /*
         * @param design\Designer
         */
        protected $designer;
        /*
         * @param effects\Observer
         */
        protected $observer;
        /*
         * @param Template
         */
        protected $template;
        /*
         * @param Renderable[]
         */
        private $content;
        /*
         * @param string
         */
        public $selector="";
        /*
         * @param application\library\data\EventHandler[]
         */
        private $onEventActions=[];
        /*
         * Load new designer, observer, and template objects to handle css, js, and html,
         * respectively.
         * 
         * @param application\view\model\protocol\Deployable|string $viewModel
         * @param string $templateFile 
         */
        public function __construct($viewModel,$templateFile="")
        {
            $this->viewModel=$viewModel;
            $this->setTemplateFile($templateFile);
            $this->setSelector();
            
            //initialize CSS and Javascript handlers
            $this->designer=new Designer();
            $this->observer=new Observer();
            
            //get subview content then initialize view templates
            $this->getContent();
            $this->setTemplate();
        }
        
        /*
         * Ask the view model for the subviews that comprise this view's content.
         */
        private function setContent(){
            $this->content=$this->viewModel->getContent();
        }
        /*
         * 
         */
        public function setTemplateFile($file=""){
            $this->templateFile = $file;
        }
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function loadTemplate($templateFile=NULL){
            
            //nested array of subview templates
            $contentTemplates=[];
            foreach($this->content as $subview){
                $contentTemplates[] = $subview->loadTemplate();
            }
            $this->template = new Template($tmpl,$tmplFile);
        }
        
        /*
         * 
         */
        public function addCssRule(CSSRule $cssRule){
            $this->designer->addRule($cssRule);
        }
        
        /*
         * Submit an event handler object to the Observer.
         */
        public function addEventHandler(EventHandler $eventHandler){
            $observer->addEvent();
        }
        
        /*
         * Render content using services and/or templates.
         * 
         * @param bool $cache Whether to cache the html that the template renders
         */
        public function renderHTML($cache=FALSE)
        {
            if($cache){
                $this->cache();
            }
            else{
                $this->template->render();
            }
        }
        
        /*
         * Render dynamic CSS style sheets.
         */
        public function renderCSS(){
            $this->designer->design();
            foreach($this->content as $view){
                $view->design();
            }
        }
        /*
         * Build requests and render javascript event handler functions.
         */
        public function renderJS()
        {
            if($this->OnEventActions){
                foreach($this->OnEventActions as $eventHandler){
                    $this->observer->addListener($eventHandler);
                }
            }
            $this->observer->observe();
            foreach($this->content as $view){
                $view->observe();
            }
        }
        /*
         * 
         */
        public function cache(){
            
        }
    }
?>