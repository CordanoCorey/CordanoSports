<?php 
    namespace application\view\model\topic\events\event;
    use \application\view\model\collections\EventsView as EventsView;
    use \application\view\model\Tabular as Tabular;
    use \application\view\model\Includeable as Includeable;
    /*
    * 
    *
    * @package events
    * @version 1.0
    * @author coreygelbaugh
    */
   class Calendar extends EventsView implements Tabular,Includeable
   {
       public $context=NULL;
       public $class="events";
       public $factor=NULL;
   }