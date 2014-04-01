<?php 
    namespace Multimedia;
    /*
     * 
     * 
     * @Package Multimedia
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class MediaFile implements Axiomatic,Attachable
    {
        use Properties;
        use Attachment;
        use Citation;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>