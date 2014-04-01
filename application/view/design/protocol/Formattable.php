<?php
namespace application\view\elements;
/**
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Formattable extends \JsonSerializable{
    public function formatData();
}
