<?php 
    namespace Multimedia;
    /*
     * Media inserted in a photo file format.
     * 
     * @Package Multimedia
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Photo extends Media implements Axiomatic,Attachable
    {
        use Properties;
        use Attachment;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>