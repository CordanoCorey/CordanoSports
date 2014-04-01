<?php 
namespace application\view\collections\protocol;
/**
* Protocol for view models to implement in order to be displayed in a List View.
* 
* @package view
* @author coreygelbaugh
* @version 1.0
* 
*/
interface Listable
{
    public function getListHeading();
    public function getListRows();
}