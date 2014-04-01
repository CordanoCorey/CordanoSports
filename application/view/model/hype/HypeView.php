<?php 
    namespace application\view\model\collections;
    use application\view\model\Deployable as Deployable;
    /*
     * Class for viewing collections of hype.
     * 
     * @package hype
     * @version 1.0
     * @author coreygelbaugh
     */
    Class HypeView extends CollectionView implements Featurable,Collectible
    {
        public $context=NULL;
        public $class="hype";
        public $factor=NULL;
    }