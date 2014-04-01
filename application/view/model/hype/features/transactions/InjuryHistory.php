<?php 
    namespace Hype\Transactions;
    /*
     * Injury histories are attributes of every player who has suffered and
     * recorded an injury in sports.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class InjuryHistory extends Transactions implements \Listable,\Viewable,\Collaborative
    {
        use ListView;
        use Overview;
        
    }
?>