<?php
namespace application\view\widgets;

/**
 * 
 *
 * @package widgets
 * @author coreygelbaugh
 * @version 1.0
 */
class TextWidget extends Widget{
    
    private $html;
    
    public function __construct($displayText){
        $paragraphString = "<p> $displayText </p>";
        $this->setHtml();
    }
    
    
}
