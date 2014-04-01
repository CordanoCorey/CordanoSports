<?php
namespace application\view\widgets;

/**
 * 
 *
 * @package widgets
 * @author coreygelbaugh
 * @version 1.0
 */
class ImageWidget extends Widget{
    private $html;
    
    public function __construct($displayText){
        $htmlString = "<a><img> $this->imageUrl </img></a>";
        $this->setHtml($videoUrl);
    }
    
    public function setHtml($htmlString){
        $this->html[] = $htmlString;
    }
}
