<?php 
    namespace Hype\Transactions;
    /*
     * Results from events the team participated in.
     * 
     * @Package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Results extends Transactions implements \Listable,\Tabular
    {
        use ListView;
    }
?>