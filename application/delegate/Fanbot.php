<?php
    namespace application\model\apps;
    /*
    * Dr. Cordano's fanbot has the responsibility of answering questions.
    * 
    * @package professor
    * @author coreygelbaugh
    * @version 1.0
    */
    Class Fanbot
    {
        private $question;
        
        /*
         * @param Question $question
         */
        public function __construct($question){
            $this->question = $question;
        }
        /*
         * @param string $answerFormat Type of answer that the question evokes
         */
        public function getAnswer($answerFormat){
            switch($answerFormat){
                case "ranking":
                    break;
                case "comparison":
                    break;
                case "grade":
                    break;
                case "pollChoice":
                    break;
                case "detail":
                    break;
                case "specs":
                    break;
                case "boolean":
                    break;
                default:
                    break;
            }
        }
        
    }