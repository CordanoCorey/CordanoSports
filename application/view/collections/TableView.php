<?php
    namespace application\view\collections;
    /*
     * Class for displaying tables. Any class that utilizes this view 
     * adheres to the Tabular protocol. 
     * 
     * @package view
     * @version 1.0
     * @author coreygelbaugh
     */
    Class TableView extends CDView
    {
        /*
         * @param application/view/CDView
         */
        private $tableHeading;
        /*
         * @param application/view/CDView
         */
        private $tableColumns;
        /*
         * @param application/view/CDView
         */
        private $tableRows;
        
        public function getContent()
        {
            $this->tableHeading = $this->viewModel->setTableHeading();
            $this->tableColumns = $this->viewModel->setTableColumns();
            $this->tableRows = $this->viewModel->setTableRows();
        }
        
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function getTemplate($tmplFile){
            
            //nested array of subview templates
            $tmpl=[];
            $tmpl[] = $this->tableHeading->getTemplate();
            $tmpl[] = $this->tableColumns->getTemplate();
            foreach($this->tableRows as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            $this->template = new Template($tmpl,$tmplFile);
        }
        
        private function observe(){
            //add table event protocol
            //$this->observer->onClickAction[] = $this->viewModel->onClickTableCell();
            //$this->observer->onClickAction[] = $this->viewModel->onClickTableColumnName();
            //$this->observer->onClickAction[] = $this->viewModel->onClickTableRowName();
            //$this->observer->onHoverAction[] = $this->viewModel->onHoverOverTable();
            
            //echo javascript
            parent::observe();
        }
    }
?>