<?php
    namespace Transactions;
    /*
     * Transactions are observable events that are not confined to the 
     * court or field of play.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Transaction extends \NewsStory implements \Factorable,\Summarizable,\Manageable,\Citeable,\Reviewable,\Addable
    {
        use Properties;
        use Factors;
        public function __construct()
        {
            $this->getSource();
        }
        /*
         * Get the complete negotiation rundown associated with this transaction,
         * if available.
         * 
         * @return array
         */
        protected function getNegotiations()
        {
            
        }
    }
?>