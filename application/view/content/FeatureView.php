<?php
    namespace application\view\containers;
    use \application\view\CDView as CDView;
    use \application\view\protocol\Navigational as Navigational;
    /*
     * 
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class FeatureView extends CDView{
        private $featureBackground;
        private $featureTitle;
        private $featureContent;
        
        public function getContent()
        {
            $this->featureBackground = $this->viewModel->setFeatureBackground();
            $this->featureTitle = $this->viewModel->setFeatureTitle();
            $this->featureContent = $this->viewModel->setFeatureContent();
        }
        
        public function render(){
            $this->template->render();
        }
    }