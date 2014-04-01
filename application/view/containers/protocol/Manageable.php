<?php
namespace application\view\containers\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Split View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Manageable {
    public function setNavigationView();
    public function setPrimaryView();
    public function setSecondaryView();
}
