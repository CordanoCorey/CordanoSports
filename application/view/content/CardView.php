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
    Class CardView extends CDView
    {
        /*
         * @param string|Template
         */
        private $headline;
        /*
         * @param string|Template
         */
        private $profile;
        /*
         * @param string|Template
         */
        private $review;
        
        public function getContent()
        {
            $this->headline = $this->viewModel->setCardHeadline();
            $this->profile = $this->viewModel->setCardProfile();
            $this->review = $this->viewModel->setCardReview();
        }
        
        public function render(){
            $this->headline->render();
            $this->profile->render();
            $this->review->render();
        }
    }
?>