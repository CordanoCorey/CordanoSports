<?php 
    namespace Transactions;
    /*
     * Awards are any titles assigned to members of the playerverse
     * upon reaching a benchmark.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Award extends Transaction implements \Verifiable
    {
        use Projection;
    }
?>