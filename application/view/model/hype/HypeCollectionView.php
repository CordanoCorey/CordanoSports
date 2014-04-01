<?php 
    namespace application\view\model\hype;
    //use \application\view\model\protocol\Featurable as Featurable;
    use \application\view\model\collections\protocol\Listable as Listable;
    /*
     * Class for viewing collections of hype.
     * 
     * @package hype
     * @version 1.0
     * @author coreygelbaugh
     */
    Class HypeCollectionView implements Featurable,Cellular,Listable
    {
        protected $hypeCollection;
        
        public function __construct($hypeCollection){
            
            $this->hypeCollection = $hypeCollection;
            
        }
    }