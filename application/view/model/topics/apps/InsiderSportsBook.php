<?php
    namespace SportsBook;
    
     /*
     * The Insider Sports Book class is the paid pro and college sports
     * projection application. Subscribers will be delivered projections
     * before games happen with several Cordano Sports exclusive measures
     * for predicting game outcomes. These measures are based upon a
     * mixture distribution of game lines, historical results, user input, 
     * and the Cordano secret formula for how those factors interact.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class InsiderSportsBook extends SportsBook implements Live,Exclusive
     {
         use RealTime;
         
     }
?>