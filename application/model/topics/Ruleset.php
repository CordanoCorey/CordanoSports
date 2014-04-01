<?php
    /*
     * Rules, parameters, and game format information for a gameframe.
     * Rulesets are the parameters specified when games are created 
     * within the Game Creator app.
     * 
     * @Package Gameplay
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class Ruleset extends Gameplay
     {
         use Properties;
         use Summary;
         public function __construct()
        {
            $this->getSource();
        }
     }
?>