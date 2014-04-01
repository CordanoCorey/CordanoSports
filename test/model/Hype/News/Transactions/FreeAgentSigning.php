<?php 
    namespace Transactions;
    /*
     * A free agent signing involves a team acquiring a player
     * who had status as a free agent.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class FreeAgentSigning extends Transaction implements \Verifiable
    {
        use Projection;
    }
?>