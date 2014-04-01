<?php
    namespace Players;
    /*
     * With the Prospect app, users can build hype around players by making 
     * player highlights and academic standing available to scouts.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Prospect extends Player implements \Participatory,\Noteable
    {
        /*
         * Add a new prospect to the database.
         * 
         * @Param
         * @Return
         * @Throws
         */
        private function bookmark()
        {
            
        }
        /*
         * Add file to user folder.
         */
        function log($cxn,$class,$id,$folder=NULL)
        {
            
        }
        /*
         * Add a statistical dimension for this prospect to the
         * measurement table.
         */
        function logDimension()
        {
            
        }
        /*
         * Add an academic achievement to prospect transcript.
         */
        function addtoTranscript()
        {
            
        }
    }
?>