<?php
    namespace Commentary;
    /*
     * 
     * 
     * @Package Commentary
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class SportsWriter extends Publisher implements \Executive
    {
        /*
         * 
         */
        function postColumn()
        {
            $this->post();
        }
        /*
         * 
         */
        function createPeriodical()
        {
            $this->create();
        }
        /*
         * 
         */
        function createBlog()
        {
            
        }
        /*
         * 
         */
        function createDiscussion()
        {
            
        }
        /*
         * 
         */
        function reviseColumn()
        {
            
        }
    }
?>