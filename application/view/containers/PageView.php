<?php
    namespace application\view\containers;
    use \application\view\CDView as CDView;
    use \application\view\protocol\Navigational as Navigational;
    use \application\view\design\protocol\Orientable as Orientable;
    
    /*
     * Class for displaying pageable content.
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class PageView extends CDView implements Navigational, Orientable
    {
        public $templateFile = "templates/views/containers/pageview.php";
        public $selector = "pageview";
        private $orientation = "vertical";
        /*
         * @param int Number of pages to display
         */
        public $pageLabels;
        /*
         * @param application/view/CDView
         */
        private $pageInventory;
        /*
         * @param application/view/CDView
         */
        private $pageFeatures;
        /*
         * @param application/view/CDView
         */
        private $pageContent;
        /*
         * @param application/view/Template
         */
        private $template;
        
        /*
         * 
         */
        private function setContent(){
            
            $this->pageLabels = $this->viewModel->getPageLabels();
            
            foreach($this->pageLabels as $label) {
                $this->pageInventory[$pageId] = $this->viewModel->getPageInventory($pageId);
                $this->pageFeatures[$pageId] = $this->viewModel->getPageFeatures($pageId);
                $this->pageContent[$pageId] = $this->viewModel->getPageContent($this->selector."-content-".$pageId);
            }
        }
        
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function setTemplate($tmplFile){
            
            $pageInventory = $this->pageInventory->getTemplate();
            //nested array of subview templates
            $tmpl=[];
            for ($i = 0; $i < $this->pageCount; $i++) {
                $tmpl[$i]["pageInventory"] = $pageInventory;
                $tmpl[$i]["pageFeatures"] = $this->pageFeatures[$i]->getTemplate();
                $tmpl[$i]["pageContent"] = $this->pageContent[$i]->getTemplate();
            }
            
            //load the initial page template
            $this->template = new Template($tmpl[0],$tmplFile);
            
            //cache the remaining page templates to be viewed when user selects the corresponding page nav item
            for($i=1; $i < $this->pageContent; $i++){
                $this->cache(new Template($tmpl[0],$tmplFile));
            }
            
        }
        
        public function setOrientation($orientation="vertical"){
            if($orientation=="horizontal"){
                $this->template->file = "templates/views/containers/pageview.php";
            }
        }
    }