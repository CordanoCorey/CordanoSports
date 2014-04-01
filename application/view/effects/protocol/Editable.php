<?php 
namespace application\view\model\collections;
/**
*
* @package view
* @author coreygelbaugh
* @version 1.0
* 
*/
interface Editable
{
    public function setInputType();
    public function onChangeAction();
    public function onBlurAction();
}