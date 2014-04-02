<?php


namespace application\view\model\protocol;

/**
 *
 * @author coreygelbaugh
 */
interface Featurable extends Deployable{
    
    public function loadFeature();
    public function loadView();
}
