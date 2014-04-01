<?php
namespace application\view\widgets;

/**
 * 
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 */
class ButtonView extends Widget implements Formattable,Clickable{
    /*
     * @param string
     */
    public $linkUrl="";
    private $buttonLabel;
    private $buttonClass;
    private $html;
    
    public function __construct($buttonLabel,$buttonClass=NULL){
        $this->buttonLabel = $buttonLabel;
        $this->buttonClass = $buttonClass;
        $this->setHtml();
    }
    
    public function setHtml(){
        $htmlString = "<button type='button'>$this->buttonLabel</button>";
        $this->html[] = $htmlString;
    }
}
