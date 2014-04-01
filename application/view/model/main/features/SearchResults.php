<?php
    /*
     * If a user searches within a collection, they will not be directed to the
     * Fanbot SERP page, but rather will land at this generic search results 
     * display. Each is taylored to answer the specific questions that can
     * be asked with respect to the collection in question.
     * 
     * @Package Main
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class SearchResults implements Listable
     {
         use ListView;
         private $collection;
         private $topic;
         
         /*
          * 
          * 
          * @param string $namespace The namespace of the collection to be searched.
          * @param Topic $topic
          */
         public function __construct($namespace,$topic=NULL)
         {
             
         }
     }
?>