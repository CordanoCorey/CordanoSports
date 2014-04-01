<?php
namespace application\view\protocol;
/**
 * Html content rendering protocol for views to implement.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Renderable{
    public function setContent();
    public function loadTemplate();
    public function renderHtml();
    public function cache();
}
