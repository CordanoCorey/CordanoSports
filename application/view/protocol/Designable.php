<?php
namespace application\view\protocol;
use application\library\data\CSSRule as CSSRule;

/**
 * Dynamic CSS style sheet rendering protocol for views to implement.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Designable{
    public function addCssRule(CSSRule $cssRule);
    public function renderCSS();
}
