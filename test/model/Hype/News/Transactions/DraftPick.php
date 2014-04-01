<?php 
    namespace Transactions;
    /*
     * A draft pick details the action of a team to select a
     * player in a draft.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class DraftPick extends Transaction implements \Verifiable
    {
        use Projection;
    }
?>