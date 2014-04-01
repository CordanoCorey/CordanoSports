<?php
    namespace Analysis;
    /*
     * A "hypeline" is Cordano's term for user input that follows can be
     * measured and utilized by Fanbot in answering questions. This type of
     * commentary is input via a pre-formatted form with fields specially 
     * designed to answer specific questions.
     * 
     * @Package Analysis
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Answer implements Axiomatic,Factorable
    {
        use Properties;
        use Factors;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>