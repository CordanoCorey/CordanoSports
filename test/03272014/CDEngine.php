<?php
    namespace application\logic;
    /*
     * 
     * 
     * @package engine
     * @version 1.0
     * @author coreygelbaugh
     */
    Class CDEngine
    {
        /*
         * @param Question
         */
        private $question;
        /*
         * @param Answer
         */
        private $answer;
        /*
         * @param Fanbot
         */
        private $fanbot;
        /*
         * @param HypeMachine
         */
        private $hypeMachine;
        /*
         * @param Reviewer
         */
        private $reviewer;
        /*
         * @param Calculator
         */
        private $calculator;
        /*
         * @param Dictionary
         */
        private $dictionary;
        
        public function __construct(){
            $this->fanbot=new Fanbot();
            $this->hypeMachine=new HypeMachine();
            $this->aliaser=new Aliaser();
            $this->reviewer=new Reviewer();
            $this->rater=new Rater();
            $this->calculator=new Calculator;
            $this->dictionary=new Dictionary;
        }
        public function askFanbot($question){
            return $answer;
        }
        public function hyperise($answer){
            return $question;
        }
        public function review(){
            
        }
        public function calculate(){
            
        }
        public function define(){
            
        }
        
    }
?>