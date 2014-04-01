<?php 
    namespace application\view\model\collections;
    use application\view\model\Deployable as Deployable;
    /*
     * Class for viewing collections of leagues.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class LeaguesView extends CollectionView implements Deployable
    {
        public $context=NULL;
        public $class="leagues";
        public $factor=NULL;
    }