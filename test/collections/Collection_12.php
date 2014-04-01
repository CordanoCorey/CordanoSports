<?php 
    namespace Stats;
    /*
     * Class for collections of statistics.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection implements \Loadable,\Verifiable,\Renderable
    {
        use Spreadsheet;
        public static $topics=["Statlines","Scores"];
    }
?>