<?php 
    namespace Transactions;
    /*
     * Trades involve to transfer of a player or players from one team
     * to another.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Trade extends Transaction implements \Verifiable
    {
        use Projection;
    }
?>