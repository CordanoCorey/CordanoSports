<?php
namespace application\view\model\protocol;

/**
 * Protocol for view models to implement so that their controller can load a page 
 * corresponding to a url.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 */
interface Indexable extends Featurable{
    
    public function loadCollection();
    public function getLayout();
    public function getBackground();
    public function getTitle();
}
