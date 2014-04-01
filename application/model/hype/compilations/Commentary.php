<?php
    namespace Commentary;
    /*
     * Comments are responses to news stories that are 140 characters are less.
     * 
     * @Package Commentary
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Comment extends \Hype implements \Axiomatic,\Primitive
    {
        use Properties;
        use Fields;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>