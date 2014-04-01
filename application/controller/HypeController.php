<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    
    use application\model\main\User as User;
    
    use application\model\protocol\Axiomatic as Axiomatic;
    use application\model\protocol\Administrative as Administrative;
    use application\model\protocol\Filterable as Filterable;
    
    
    use application\view\model\hype\HypeView as ElementView;
    use application\view\model\hype\HypeMachine as ManagerView;
    use application\view\model\hype\HypeCollectionView as CollectionView;
    use application\view\model\main\FanbotView as FanbotView;
    
    
    use application\view\model\protocol\Indexable as Indexable;
    use application\view\model\protocol\Deployable as Deployable;
    
    /*
    * Controller for executing hype requests.
    * 
    * @package hype
    * @author coreygelbaugh
    * @version 1.0
    */
    Class HypeController extends CDController
    {
        /*
         * @param ClientRequest $request
         */
        public function __construct($request){
            
            parent::construct();
            
            if($this->request->idHype){
                
                if($this->request->role){
                    $this->domainState = new HypeMachine($this->request->idHype,$this->idUser,$this->request->role);
                }
                else{
                    $this->domainState = new Hype($this->request->idHype,$this->idUser);
                }
            }
            else{
                $this->domainState = new HypeCollection($this->idUser);
            }
            
        }
        
        public function review($args){
            $this->hypeMachine->sportsReporter->review($args);
        }
        
        public function publish($args){
            $this->hypeMachine->sportsWriter->publish($args);
        }
        
        public function attach(){
            
        }
        
        public function addHype(){
            
        }
        
        public function tagTopic(){
            
        }
        
        public function report(){
            
        }
        
        public function cite(){
            
        }
        
        public function cropImage(){
            require_once "../include/config.php";

            $file = basename($_GET["image"]);
            $cropped = "cropped_" . $file;
            $image = new Imagick(UPLOAD_DIR . "/" . $file);
            $image->cropImage($_GET["width"], $_GET["height"], $_GET["x"], $_GET["y"]);
            $image->writeImage(UPLOAD_DIR . "/" . $cropped);
            echo basename(UPLOAD_DIR) . "/" . $cropped;
        }
        
        public function uploadImage(){
            require_once "../include/config.php";

            if (isset($_FILES["file"])) {
                $tmpFile = $_FILES["file"]["tmp_name"];

                $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
                $fileName = uniqid(rand(), true) . "." . $ext;

                list($width, $height) = getimagesize($tmpFile);
                // check if the file is really an image
                if ($width == null && $height == null) {
                    header("Location: index.php");
                    return;
                }
                // resize if necessary
                if ($width >= 400 && $height >= 400) {
                    $image = new Imagick($tmpFile);
                    $image->thumbnailImage(400, 400);
                    $image->writeImage(UPLOAD_DIR . "/" . $fileName);
                }
                else {
                    move_uploaded_file($tmpFile, UPLOAD_DIR . "/" . $fileName);
                }
            }
        }
        
        private function saveUploadedFile(){
            if (!empty($_FILES["myFile"])) {
                $myFile = $_FILES["myFile"];

                if ($myFile["error"] !== UPLOAD_ERR_OK) {
                    echo "<p>An error occurred.</p>";
                    exit;
                }

                // ensure a safe filename
                $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

                // don't overwrite an existing file
                $i = 0;
                $parts = pathinfo($name);
                while (file_exists(UPLOAD_DIR . $name)) {
                    $i++;
                    $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
                }

                // preserve file from temporary directory
                $success = move_uploaded_file($myFile["tmp_name"],
                    UPLOAD_DIR . $name);
                if (!$success) { 
                    echo "<p>Unable to save file.</p>";
                    exit;
                }

                // set proper permissions on the new file
                chmod(UPLOAD_DIR . $name, 0644);
            }
        }
    }