<?php 
namespace application\view\collections\protocol;
/**
* Protocol for view models to implement in order to be displayed in a Form View.
* 
* @package view
* @author coreygelbaugh
* @version 1.0
* 
*/
interface Submittable
{
    public function setFormFields();
    public function setFormApps();
    public function onSubmitFormAction();
}