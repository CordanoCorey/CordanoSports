<?php
namespace application\view;
/**
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Reloadable{
    public function addListener();
    public function registerSender();
    public function setTimestamp();
}
