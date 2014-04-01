<?php 
    namespace application\view\model\leagues\teams;
    
    use application\model\leagues\LeagueTeams as LeagueTeams;
    use application\view\model\protocol\Deployable as Deployable;
    use application\view\containers\protocol\Collective as Collective;
    /*
     * A division is a grouping of teams within a league. Special cases
     * include conferences and classes.
     * 
     * @package leagues
     * @version 1.0
     * @author coreyelbaugh
     */
    Class Divisions extends TeamsView implements Collective
    {
        
    }