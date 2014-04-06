<?php
namespace application\model\db\protocol;

/**
 *
 * @package model
 * @author coreygelbaugh
 * @version 1.0
 */
interface Axiomatic {
    public function getProperty();
    public function setProperty();
    public function getState();
    public function getStatus();
    public function getSource();
}
