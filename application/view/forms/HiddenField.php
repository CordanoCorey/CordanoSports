<?php
namespace application\view\widgets;
use application\view\protocol\Renderable as Renderable;
use application\view\widgets\protocol\Renderable as Editable;

/**
 * Class to display fields within a form.
 *
 * @package widgets
 * @author coreygelbaugh
 * @version 1.0
 */
class HiddenField extends CDView implements Renderable,Editable{
    
    private $fieldType;
    private $fieldLabel;
    /*
     * @param application\library\data\EventHandler
     */
    private $onChangeAction;
    /*
     * @param application\library\data\EventHandler
     */
    private $onBlurAction;
    
    private $html;
    
    public function __construct($displayText){
        $htmlString = "<p> $this->displayText </p>";
        $this->setHtml($videoUrl);
    }
    
    public function setHtml($htmlString){
        $this->html[] = $htmlString;
    }
}
