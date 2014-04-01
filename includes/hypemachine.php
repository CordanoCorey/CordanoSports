    <?php
        include "includes/templates.php";
 	
        Class Router
        {
            /*
            * @param Registry
            */
            protected $registry;
            public $expectedGet=[];
            public $expectedPost=[];
            public function __construct($get,$post=NULL){
                
            }
            /*
             * Load the correct controller for processing the request.
             * 
             * @return CDController
             */
            public function route(){
                return new HypeController();
            }
            // SWAPS THE BACKGROUND IMAGE DEPENDING ON PAGE URI
            function curPageURL() {
                $page = $_SERVER['REQUEST_URI'];
                if($page == '/' && '/index.php') 
                {
                    return 'background-image:url(images/bg-signed-in.jpg);';
                }
                elseif($page == '/ingame.php') {
                    return 'background-image:url(images/bg-ingame.jpg);';
                }
                elseif($page == '/live.php') {
                    return 'background-image:url(images/bg-live.jpg);';
                }
                elseif($page == '/fantasy.php') {
                    return 'background-image:url(images/bg-fantasy.jpg);';
                }
                elseif($page == '/fandom.php') {
                    return 'background-image:url(images/bg-fandom.jpg);';
                }
                elseif($page == '/lifestyle.php') {
                    return 'background-image:url(images/bg-lifestyle.jpg);';
                }
                else
                {
                    return 'background-image:url(images/bg-index.jpg);';
                }
            }
            
            function getPageTitle(){
                return "Cordano :: Believe the Hype";
            }
            
            public function navigate($navItem)
            {
                switch($navItem){
                    case "apps":
                        return "App 1 <br> App 2";
                    default:
                        break;
                }
            }
            /*
             * 
             */
            public function updateSession($actionResponse)
            {
                $_SESSION["background"]=$this->curPageURL();
                $_SESSION["title"]=$this->getPageTitle();
                $_SESSION["apps"]=$this->navigate("apps");
            }
            /*
            * 
            */
           public function prepareRequest($getRequest,$postRequest)
           {
               foreach($this->expectedGet as $key){
                   if(!empty($getRequest[$key])){
                       ${key}=$getRequest[$key];
                   }
                   else{
                       ${key}=NULL;
                   }
               }

               foreach($this->expectedPost as $key){
                   if(!empty($postRequest[$key])){
                       ${key}=$postRequest[$key];
                   }
                   else{
                       ${key}=NULL;
                   }
               }

           }
        }
        //Displayable View Class
        Class HypeView{
            private $html="";
            private $hype;
            private $hypeCellView;
            private $controller;
            public function __construct($hype,$controller)
            {
                $this->hypeCellView=new HypePreview($hype);
                $this->hype=$hype;
                $this->controller=$controller;
                $this->reloadView();
            }
            public function reloadView()
            {
                $this->html = CDTemplate::pollView($this->hypeCellView);
                $this->html.="<br>";
                //$this->html.=CDTemplate::preview();
            }
            public function render(){
                if($this->hype){
                    echo $this->html;
                }
                else{
                    echo "Not Available";
                }
            }
            public function observe()
            {
                include_once "includes/Observer.php";
                $obs=new Observer();
                echo $obs->jsInit();
            }
            
            public function deploy()
            {
                $_SESSION["view"]=$this;
                $this->controller->index();
            }
        }
          
        //View Helper Class (has corresponding template)
        Class HypeCellView{
            public $headline="Default Title";
            public $source;
            public $date;
            public function __construct($hype)
            {
                foreach($hype->fields as $key=>$value){
                    if(property_exists(get_class($this),$key)){
                        $this->$key=$value;
                    }
                }
            }
        }
        
        Class HypePreview extends HypeCellView{
            
        }
      
        Class HypeDetail{
            
        }
        
        Class HypeOverview{
            
        }
        
        //Controller
        Class HypeController{
            public $hype;
            
            public function __construct()
            {
                $this->hype=new Hype();
                
            }
            public function invoke(){
                return "index";
            }
            public function processRequest()
            {
                if($this->hype){
                    return new HypeView($this->hype,$this);
                }
            }
            public function index()
            {
                return "home.php";
            }
        }
        
        //Model
        Class Hype{
            public $fields=[];
            
            public function __construct()
            {
                $this->fields["headline"]="Observer Test";
                $this->fields["source"]="NBC";
                $this->fields["date"]=432423;
            }
        }
        
    ?>