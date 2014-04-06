<?php
namespace application\view\elements\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Cell View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Cellular {
    public function setCellTitle();
    public function setCellSubtitle();
    public function setAvatarImage();
    public function setElementPreview();
}
