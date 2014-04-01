<?php
namespace application\view\collections\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Tile View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Tileable {
    public function setCardContent();
    public function setCardPattern();
}
