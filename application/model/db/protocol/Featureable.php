<?php
namespace application\model\db\protocol;

/**
 *
 * @author coreygelbaugh
 */
interface Featurable {
    public function getTopic();
    public function setTopic();
}
