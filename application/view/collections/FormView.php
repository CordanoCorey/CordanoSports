<?php
    namespace application\view\collections;
    /*
     * Class for editing element properties.
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class FormView extends CDView
    {
        /*
         * @param CDView[]
         */
        private $formFields;
        /*
         * @param CDView[]
         */
        private $formApplets;
        /*
         * @param Template
         */
        private $template;
        
        /*
         * Get form field and applet views.
         */
        private function getContent(){
            $this->formFields = $this->viewModel->setFormFields;
            $this->formApplets = $this->viewModel->setFormApplets;
        }
        
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function getTemplate($tmplFile){
            
            //nested array of subview templates
            $tmpl=[];
            foreach($this->formFields as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            foreach($this->formApplets as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            $this->template = new Template($tmpl,$tmplFile);
        }
        
        /*
         * Build requests and render javascript event handler functions.
         */
        private function observe(){
            //add form submission protocol
            $this->observer->onSubmitAction = $this->viewModel->onSubmitForm();
            
            //echo javascript
            parent::observe();
        }
    }
?>