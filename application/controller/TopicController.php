<?php
    namespace application\controller;
    use application\professor\DrCordano as DrCordano;
    use application\model\elements\User as User;
    use application\model\apps\AccountManager as AccountManager;
    
    use application\view\model\elements\TopicView as ElementView;
    use application\view\model\collections\TopicsView as CollectionView;
    /*
    * Controller for executing topic requests.
    * 
    * @package topics
    * @author coreygelbaugh
    * @version 1.0
    */
    Class TopicController extends CDController implements Interactive
    {
        /*
         * @param ClientRequest $request
         */
        public function __construct($request){
            parent::construct();
            $this->idElement = $this->request->idTopic;
            $additionalApps = ["Challenger"];
            array_unique(array_merge($this->apps, $additionalApps));
        }
        
    }