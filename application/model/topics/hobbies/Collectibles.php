<?php 
    /*
     * 
     * 
     */
    namespace Collectibles;
    /*
     * Class for collections of collectibles.
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collection extends \Collection
    {
       
    }
    /*
     *  
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Collectible implements Axiomatic,Featurable
    {
        use Properties;
        use Features;
        public function __construct()
        {
            $this->getSource();
        }
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class SportsCard extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Footware extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Memorabilia extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class FanGear extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Song extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Lyric extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Workout extends Collectible
    {
        
    }
    /*
     * 
     * 
     * @Package Collectibles
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Drill extends Collectible
    {
        
    }
?>