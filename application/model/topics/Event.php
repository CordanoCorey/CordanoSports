<?php 
    namespace Events;
    /*
     * Events are collections of games or timeframes that do not
     * have a single venue associated with them.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Event implements \Hierarchical,\Summarizable,\Manageable
    {
        use Properties;
        use Features;
        public function __construct()
        {
            $this->getSource();
        }
        /*
        * Load the Event Planner app.
        * 
        * @param
        * @return
        * @throws
        */
       public function manage($user,$role=NULL)
       {
            return new EventPlanner($user,$this,$role);
       }
    }
?>