<?php
    /*
     * Organizations are collections of players that span multiple leagues 
     * grouped under a broad organization title. Examples of organizations 
     * include colleges and universities as well as associations like the
     * YMCA who organize sports leagues and sporting events.
     * 
     * @Package Playerverse
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class Organization extends Playerverse
     {
         use Properties;
         use Factors;
         public function __construct()
        {
            $this->getSource();
        }
     }
?>