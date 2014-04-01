<?php
namespace application\view\model\protocol;
/**
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Deployable extends \JsonSerializable{
    public function deriveFields();
    public function defineActions();
}
