<?php
    namespace application\view\containers;
    use \application\view\CDView as CDView;
    use \application\view\protocol\Navigational as Navigational;
    /*
     * Class for displaying master detail views.
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class SplitView extends CDView{
        
        public function setContent()
        {
            $this->scrollerNav = $this->viewModel->getScrollerMenu();
            $this->scrollerFilters = $this->viewModel->getScrollerFilters();
            $this->scrollerContent = $this->viewModel->getScrollerCollection();
        }
    }