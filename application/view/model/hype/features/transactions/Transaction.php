<?php 
    /*
     * This file consists of site display content that is specific to a single transaction.
     */
    namespace Transactions\Transaction;

    /*
     * Class for commentary surrounding a transaction.
     * 
     * @Package Transactions
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Commentary extends Commentary\Collection implements Collective
    {
        use Compilation;
    }
    /*
     * Headlines is a collection of top news stories for the given
     * page search criteria. It is a News Report content feed that
     * returns most relevant news headlines within the current context.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Headline extends News implements Trending,Listable
    {
        use ListView;
        private $news;
    }
    /*
     * A storyline is all news posted within a given topic. It's purpose is
     * to allow users to view a news story's development from start to finish.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Storyline extends News implements Trending,Listable
    {
        use ListView;
        private $news;
    }
?>