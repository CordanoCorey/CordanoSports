<?php
namespace application\view\widgets;

/**
 * 
 *
 * @package widgets
 * @author coreygelbaugh
 * @version 1.0
 */
class CaseWidget extends Widget{
    
    private $caseName;
    private $html;
    
    public function __construct($displayText){
        $htmlString = "<p> $this->displayText </p>";
        $this->setHtml($videoUrl);
    }
    
    public function setHtml($htmlString){
        $this->html[] = $htmlString;
    }
}
