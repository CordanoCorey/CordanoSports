<?php
    namespace application\delegate;
    use application\delegate\input\Router as Router;
    use application\delegate\session\Factory as Factory;
    use application\delegate\output\Dispatcher as Dispatcher;
    
    /*
     * The app delegate class handles interactions with other networks.
     * 
     * @package delegate
     * @version 1.0
     * @author coreygelbaugh
     */
    Class CDDelegate
    {
        /*
         * @param Router
         */
        private $router;
        /*
         * @param Dispatcher
         */
        private $dispatcher;
        /*
         * @param Factory
         */
        public $factory;
        
        public function __construct(){
            $this->factory=new Factory();
        }
        
        public function inputRequest($get,$post){
            $this->router=new Router($get,$post);
        }
        
        public function outputRequest($get,$post){
            $this->dispatcher=new Dispatcher();
        }
        
        public function __call($name,$arguments=NULL){
            if(method_exists($this->router,$name)){
                return call_user_func_array([$this->router,$name],$arguments);
            }
            elseif(method_exists($this->dispatcher,$name)){
                return all_user_func_array([$this->dispatcher,$name],$arguments=NULL);
            }
        }
        
        function cleanInput($input) {

            $search = array(
              '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
              '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
              '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
              '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
            );

              $output = preg_replace($search, '', $input);
              return $output;
        }
  
        function sanitize($input) {
            
            if (is_array($input)) {
                foreach($input as $var=>$val) {
                    $output[$var] = sanitize($val);
                }
            }
            else {
                if (get_magic_quotes_gpc()) {
                    $input = stripslashes($input);
                }
                $input  = cleanInput($input);
                $output = mysql_real_escape_string($input);
            }
            return $output;
        }
        
        function getRemoteIPAddress() {
            $ip = $_SERVER['REMOTE_ADDR'];
            return $ip;
        }
        
        function getRealIPAddr()
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            {
                $ip=$_SERVER['HTTP_CLIENT_IP'];
            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
            {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
                $ip=$_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }
    }