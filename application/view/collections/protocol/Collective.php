<?php
namespace application\view\containers\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Gallery View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Collective extends Cellular,Listable,Tabular{
    public function setCaseNames();
    public function setCaseContent();
}
