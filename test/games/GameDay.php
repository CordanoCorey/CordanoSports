<?php
    namespace application\controller;
    use application\model\apps\Fanbot as Fanbot;
    use application\model\apps\HypeMachine as HypeMachine;
    use application\model\apps\AccountManager as AccountManager;
    use application\model\apps\games\GameDay as GameDay;
    /*
    * Controller for executing game requests.
    * 
    * @package games
    * @author coreygelbaugh
    * @version 1.0
    */
    Class GameDay extends CDController implements Administrative
    {
        private $gameDay;
    }