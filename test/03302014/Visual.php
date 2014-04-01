<?php 
namespace application\view\model\collections;
/**
* 
* @package view
* @author coreygelbaugh
* @version 1.0
* 
*/
interface Visual
{
    public function setFolders();
    public function setFiles();
    public function onClickFolder();
    public function onClickFile();
}