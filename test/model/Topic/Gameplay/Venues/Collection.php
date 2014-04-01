<?php 
    namespace Venues;
    /*
     * Class for collections of venues.
     * 
     * @Package Venues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Loadable,\Locateable
    {
       use LocationRadius;
    }
?>