<?php
namespace application\view\containers\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Page View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Pageable {
    public function getPageLabels();
    public function getPageInventory();
    public function getPageFeatures();
    public function getPageContent();
}
