<?php
    namespace application\view\elements;
    /*
     * Class for displaying simple cell views. Any class that utilizes this view 
     * adheres to the Cellular protocol. 
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class CellView extends CDView
    {
        /*
         * @param string|Template
         */
        private $title;
        /*
         * @param string|Template
         */
        private $subtitle;
        /*
         * @param string|Template
         */
        private $detail;
        /*
         * @param Template
         */
        private $template;
        
        public function __construct($viewModel,$tmplFile){
            $this->viewModel = $viewModel;
            $this->tmplFile = $tmplFile;
        }
        
        public function getContent()
        {
            //parent::getData;
            $this->title=$this->viewModel->setCellTitle();
            $this->subtitle=$this->viewModel->setCellSubtitle();
            $this->detail = $this->viewModel->setCellDetail();
        }
        
        public function render(){
            $this->template->render();
        }
    }
?>