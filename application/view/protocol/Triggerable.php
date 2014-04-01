<?php
namespace application\view\protocol;
use application\library\data\EventHandler as EventHandler;
/**
 * User event handler protocol for views to implement.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Triggerable extends Designable{
    public function addEventHandler(EventHandler $eventHandler);
    public function renderJS();
}
