<?php
namespace application\view;

/**
 * The Designer class renders the css style sheets for the view.
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 */
class Designer {
    /*
     * @param Designer
     */
    private $parent;
    /*
     * @param application\library\data\CssRule
     */
    private $cssRule;
    
    public function __construct($parent=NULL){
        $this->parent = $parent;
    }
    
    public function setRule($rule,$value){
        
    }
    
    public function renderCSS(){
        
    }
}
