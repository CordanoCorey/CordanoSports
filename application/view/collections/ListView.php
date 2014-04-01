<?php
    namespace application\view\collections;
    /*
     * Class for displaying lists of views. Any class that utilizes this view 
     * adheres to the Listable protocol. 
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class ListView extends CDView
    {
        /*
         * @param application/view/CDView[]
         */
        private $listRows;
        /*
         * @param application/view/Template
         */
        private $template;
        
        public function getContent(){
            $this->listRows = $this->viewModel->setListRows();
        }
        
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function getTemplate($tmplFile){
            
            //nested array of subview templates
            $tmpl=[];
            foreach($this->listRows as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            $this->template = new Template($tmpl,$tmplFile);
        }
        
        /*
         * Build requests and render javascript event handler functions.
         */
        private function observe(){
            //add row click protocol
            $this->observer->onClickAction = $this->viewModel->onClickListRow();
            
            //echo javascript
            parent::observe();
        }
    }
?>