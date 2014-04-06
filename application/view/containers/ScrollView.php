<?php
    namespace application\view\containers;
    use \application\view\CDView as CDView;
    use \application\view\protocol\Navigational as Navigational;
    
    /*
     * Class for displaying scroller divs.
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class ScrollView extends CDView implements Navigational
    {
        /*
         * @param CDView[]
         */
        private $subviews;
        
        public function setContent()
        {
            $this->scrollerNav = $this->viewModel->getScrollerMenu();
            $this->scrollerFilters = $this->viewModel->getScrollerFilters();
            $this->scrollerContent = $this->viewModel->getScrollerCollection();
        }
        
    }