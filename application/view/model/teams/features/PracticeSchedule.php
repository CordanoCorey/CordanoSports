<?php 
    namespace application\view\model\teams\team\lockerroom;
    use \application\view\model\collections\EventsView as EventsView;
    /*
    * Teams can have a practice schedule associated with them that
    * displays the dates and times of their scheduled practices.
    *
    * @package teams
    * @version 1.0
    * @author coreygelbaugh
    */
   class PracticeSchedule extends EventsView
   {
       public $context="team";
       public $class="events";
       public $factor="practice";
   }