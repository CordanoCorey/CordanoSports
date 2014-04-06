<?php
    namespace application\model\apps;
    /*
    * Class for executing hype queries sent from the hype controller.
    * 
    * @package hype
    * @author coreygelbaugh
    * @version 1.0
    */
    Class HypeMachine implements Indexable,Responsive{
        /*
        * 
        */
       public function getBackground(){
           return "bg-signed-in.jpg";
       }
       /*
        * 
        */
       public function getTitle(){
           return "Cordano :: Believe the Hype";
       }
       /*
        * 
        */
       public function getLayout(){
           return "hype-machine.php";
       }
       /*
        * 
        */
       public function loadView(){
           return new AppView($this);
       }
        
    }