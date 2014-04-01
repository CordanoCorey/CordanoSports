<?php
    namespace Hype;
    use \News\Collection as News;
    use \Commentary\Collection as Commentary;
    use \Analysis\Collection as Analysis;
    use \Multimedia\Collection as Multimedia;
    
     /*
     * The Sports Book is the basic version of the Insider Sports Book.
     * It is a container for sports projections, odds, and game lines.
     * Users who don't pay for the premium odds package can't view 
     * summary odds statistics before games, but they can see the individual
     * projections input by the site community.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class SportsBook extends Projection implements Live
     {
         use RealTime;
         
     }
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