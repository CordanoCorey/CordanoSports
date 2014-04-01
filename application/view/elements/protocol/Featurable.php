<?php
namespace application\view\elements\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Feature View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Featureable {
    public function setFeatureBackground();
    public function setFeatureTitle();
    public function setFeatureContent();
}
