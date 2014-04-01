<?php 
    /*
     * 
     * 
     */
    namespace Lifestyle;
    /*
     * @package Lifestyle
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Checklist extends \Lifestyle\Collection implements \Tabular
    {
       use TableView;
    }
    
    /*
     * Manage collections.
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collector extends AccountManager
    {
        function addCollectible($class,$folder="collection")
        {   
            switch ($folder) {
                case "collection":
                    //add to class collection folder
                    break;
                case "wishList":
                    //
                    break;
                case "watchList":
                    //
                    break;
                case "tradeBlock":
                    //
                    break;
                default: //custom folder
                    break;
            }
        }
    }
    /*
     * Manage collections.
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class CollectorPro extends Collector
    {
        
    } 
    /*
     * This class manipulates and returns collections of collectible items.
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Checklists implements Searchable
    {
        /*
        * Retrieve a collection for the given user.
        */
        function collection($idUser)
        {    
            
        }
        /*
        * View footware being worn by athletes on the field or court.
        */
        function kicksOnCourt($idDirectory)
        {    
            
        }
        /*
        * Get all corporate affiliations for a directory element.
        */
        function affiliations($idDirectory)
        {    
            
        }
        /*
        * Collection of play calls added by a coach.
        */
        function playBook()
        {    
            
        }
        /*
        * Collection of workouts.
        */
        function trainingProgram()
        {    
            
        }
        /*
        * Collection of drills.
        */
        function workout()
        {    
            
        }
    }