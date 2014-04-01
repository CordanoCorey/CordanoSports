<?php 
    namespace application\view\model\leagues\teams;
    
    use application\model\leagues\LeagueTeams as LeagueTeams;
    use application\view\model\protocol\Deployable as Deployable;
    use application\view\containers\protocol\Collective as Collective;
    /*
     * Rosters list player details and status with respect to each team
     * in the league.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class Rosters extends Players implements Deployable,Collective
    {
        
    }