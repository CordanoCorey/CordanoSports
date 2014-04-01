<?php 
    namespace Hype\Transactions;
    /*
     * History of noteable outcomes recorded by a player.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Benchmarks extends Transactions implements \Listable,\Visible,\Collaborative
    {
        use ListView;
        use Preview;
    }
?>