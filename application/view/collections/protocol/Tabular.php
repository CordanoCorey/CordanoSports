<?php
namespace application\view\collections\protocol;
/**
 * Protocol for view models to implement in order to be displayed in a Table View.
 * 
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Tabular {
    public function getTableSummary();
    public function getTableColumns();
    public function getTableRows();
}
