<?php 
    namespace Venues;
    /*
     * Instances of this class are sports venues across the country 
     * (and eventually around the world). A venue administrator, 
     * upon verification, has the ability to plan, coordinate, 
     * advertise and sell tickets to events.
     * 
     * @Package Venues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class Venue implements \Axiomatic,\Summarizable
     {
         use Properties;
         use Features;
         public function __construct()
        {
            $this->getSource();
        }
     }
?>