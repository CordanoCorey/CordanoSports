<?php
    namespace Plays;
    /*
     * 
     * @Package Plays
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class ScoringPlay extends Play
    {
        use Properties;
        use Fields;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>