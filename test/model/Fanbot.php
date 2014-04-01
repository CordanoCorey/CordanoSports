<?php
    /*
     * With Fanbot, users can ask a sports question, optionaly within 
     * the scope of some topic, and get returned an answer.
     * 
     * The Fanbot class is responsible for first directing the user
     * to a page context, then managing the requested content within
     * that context. Page reloads are handled by the Fanbot, and the
     * up to date content is delivered via JSON object back to the 
     * client side script. Fanbot's job is to load packages and feeds,
     * then pass this generating content on to display objects to be
     * manipulated. The user can also send a search string and Fanbot
     * will return formatted matching content. There can only be one 
     * Fanbot class active at once (singleton) and the active Fanbot
     * is stored in the user session.
     */
    Class Fanbot implements JsonSerializable,Live
    {
        use DatabaseConnection;
        /*
         * @var Topic
         */
        private $topic;
        /*
         * @var Hype
         */
        private $hype;
        
        /*
         * 
         * 
         * @param
         * @return
         * @throws
         */
        function __construct($namespace,$className,$search=[],$request=[])
        {    
            
            //Establish a search session.
            foreach($session as $key=>$value){ //update current session
                if(property_exists(get_class($this),$key)){
                    $this->$key=$value;
                }
            }
            $this->reload($cxn,$search,$request);
        }
        /*
         * Any time a page is reloaded, multiple content objects 
         * must be refreshed, so this fanbot method iterates through
         * each content object to ensure the content is up to date.
         */
        function reload($feature,$index=NULL)
        {
            //get alerts on every reload
            $this->getContent();
        }
        function refresh()
        {
            $this->reload();
        }
        /*
         * Loads and returns an object from the given class.
         * 
         * @param
         * @return
         * @throws
         */
        private function getClass($namespace,$className,$classId=NULL)
        {
            $objName=$namespace.$classname;
            return new $objName($classId);
        }
        /*
         * Process a set request sent from the client.
         * 
         * @param
         * @return
         * @throws
         */
        public function processRequest($from,$to,$action,$args=[])
        {
            $namespace=isset($from["namespace"])?$from["namespace"]:$this->namespace;
            $className=isset($from["className"])?$from["className"]:"User";
            $classId=isset($from["classId"])?$from["classId"]:NULL;
            $obj=$this->getClass($namespace,$className,$classId);
            return $obj->$action($to,$args);
        }
        /*
         *
         * 
         * @param
         * @return
         * @throws
         */
        function autoComplete($searchString)
        {
            
        }
        /*
         * Search for both context and content given a user question.
         * 
         * @param
         * @return
         * @throws
         */
        function askFanbot($question,$to,$from=NULL)
        {
            
        }
        /*
         * Search for a ID's within the given search criteria.
         * 
         * @param
         * @return
         * @throws
         */
        function search($cxn,$collection,$class,$sendAnswer=false)
        {
            
        }
        /*
         *
         * 
         * @param
         * @return
         * @throws
         */
        public function getContent($format)
        {
            return [
                        "divs"=>$this->divs,
                        "topic"=>$this->topic
                    ];
        }
        /*
         * This method is used when a user event changes the context of 
         * the page content.
         * 
         * @param
         * @return
         * @throws
         */
        function toggle()
        {
            
        }
        /*
         * This method filters content when the context is changed.
         * 
         * @param
         * @return
         * @throws
         */
        function filter()
        {
            
        }
        /*
         * 
         * 
         * @param
         * @return
         * @throws
         */
        function loadCollection($namespace,$title,$id=NULL)
        {
            
        }
        /*
         * This method is called when the topic on the current page
         * is changed. 
         * 
         * @param array $context
         * @param string $topicName
         * @return Topic
         * @throws
         */
        public function changeTopic($context,$topicName=NULL)
        {
            if($topicName){
                $this->topic=new $topicName($context);
            }
            else{
                $this->topic=new Topic($context);
            }
            return $this->topic;
        }
        /*
         * Get the active topic object.
         * 
         * @param
         * @return Topic
         * @throws
         */
        public function getTopic()
        {
            return $this->topic;
        }
        /*
         * 
         * 
         * @param
         * @return
         * @throws
         */
        public function getAnswer($request,$format=NULL)
        {
            $this->sendAnswer($answer,$format);
        }
        /*
         * 
         * 
         * @param
         * @return
         * @throws
         */
        public function sendAnswer($answer,$format=NULL)
        {
            
        }
        /*
         * 
         * 
         * @param
         * @return
         * @throws
         */
        public function jsonSerialize() 
        {
            return $this->content;
        }
        
    }
?>
<script type="text/javascript" src= "../js/jquery-1.8.0.min.js" ></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.min.js"></script>
<link href="../css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
<label for="topic">Topic:</label><input id="topic"/>
<label for="playerverse">Playerverse:</label><input id="playerverse"/>
<label for="event">Event:</label><input id="event"/>
<label for="user">User:</label><input id="user"/>
<script>
    $(document).ready(function() {
        var ppl=["Corey","Julie","Carl","Bo","Colin","Cara","Mom","Mike","Doug","David","Donna","Debbie"];
        $('#topic').autocomplete({
            source: "../topic.php",
            minLength: 2
        });
        $('#playerverse').autocomplete({
            source: "../playerverse.php",
            minLength: 2
            
        });
        $('#event').autocomplete({
            source: "../event.php",
            minLength: 2
        });
        $('#user').autocomplete({
            source: "../user.php",
            minLength: 2
        });
    });
</script>

