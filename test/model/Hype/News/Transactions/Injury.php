<?php 
    namespace Transactions;
    /*
     * The injury class tracks the progress of an injury from the moment
     * it was suffered until the moment of full recovery.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Injury extends Transaction implements \Verifiable
    {
        use Projection;
    }
?>