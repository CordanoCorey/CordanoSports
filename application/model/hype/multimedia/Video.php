<?php 
    namespace Multimedia;
    /*
     * Media inserted in a video file format.
     * 
     * @Package Multimedia
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Video extends Media implements Axiomatic,Attachable
    {
        use Properties;
        use Attachment;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>