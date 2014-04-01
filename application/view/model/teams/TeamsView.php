<?php 
    namespace application\view\model\collections;
    use application\view\model\Deployable as Deployable;
    
    /*
     * Class for viewing collections of teams.
     * 
     * @package teams
     * @version 1.0
     * @author coreygelbaugh
     */
    Class TeamsView extends CollectionView implements Deployable
    {
        public $context=NULL;
        public $class="teams";
        public $factor=NULL;
    }