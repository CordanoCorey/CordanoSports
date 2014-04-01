<?php
     /*
     * The gameplay class is a collection class of all details involved in
     * organizing sporting events. This package represents Cordano Sports 
     * featured game formats along with those created within the Game Creator app.
     * 
     * @Package Gameplay
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class Gameplay implements Regulatory,Summarizable,Taggable
     {
         use Regulations;
         use Summary;
         public $idGameplay;
         private $venues;
         private $events;
         private $games;
         
         public function __construct()
        {
            $this->getSource();
        }
     }
?>