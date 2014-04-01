<?php 
    namespace Events;
    /*
     * Class for collections of events.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Loadable,\Timeable
    {
        use TimeInterval;
    }
?>