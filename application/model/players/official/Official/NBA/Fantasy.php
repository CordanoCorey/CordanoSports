<?php
    /*
     * Redefine collection elements to fit into the context of Fantasy Basketball.
     */
    namespace Fantasy\Basketball;
    
    Class Player extends \Player
    {
        use Basketball;
    }
    Class Team extends \Team
    {
        use Basketball;
    }
    Class League extends \League
    {
        use Basketball;
    }
    Class Game extends \Game
    {
        use Basketball;
    }
?>