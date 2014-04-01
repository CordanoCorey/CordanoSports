<?php 
    namespace Transactions;
    /*
     * Class for collections of transactions. 
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Saveable,\Predictable
    {
        public static $topics=["InjuryHistory","Accolades","Benchmarks","DraftBoard"];
        public static function save()
        {
            
        }
        public function predict()
        {
            
        }
    }
?>