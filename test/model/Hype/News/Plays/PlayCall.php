<?php
    namespace Plays;
    /*
     * 
     * @Package Plays
     * @Version 1.0s
     * @Author Corey Gelbaugh
     */
    Class PlayCall
    {
        use Properties;
        use Fields;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>