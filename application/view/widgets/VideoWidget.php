<?php
namespace application\view\widgets;

/**
 * 
 *
 * @package widgets
 * @author coreygelbaugh
 * @version 1.0
 */
class VideoWidget extends Widget{
    
    private $html;
    
    public function __construct($videoUrl){
        $htmlString = "$videoUrl";
        $this->setHtml($videoUrl);
    }
    
    public function setHtml($htmlString){
        $this->html[] = $htmlString;
    }
}
