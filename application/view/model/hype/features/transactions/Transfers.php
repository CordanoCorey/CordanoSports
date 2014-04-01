<?php 
    namespace Hype\Transactions;
    /*
     * Transfers display all player movement from team to team within a league.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Transfers extends Transactions implements Listable
    {
        use ListView;
        protected $transactions;
    }
?>