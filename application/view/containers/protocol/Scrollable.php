<?php
namespace application\view\containers\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Scroll View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Scrollable {
    public function setFilterMenu();
    public function setScrollerView();
}
