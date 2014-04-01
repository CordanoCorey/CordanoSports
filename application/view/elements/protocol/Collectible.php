<?php
namespace application\view\elements\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Card View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Collectible{
    public function setCardHeadline();
    public function setCardBackground();
    public function setCardProfile();
    public function setCardReview();
    public function setElementOverview();
}
