<?php
namespace application\view\enum;

/**
 * Class for tiling card collections.
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 */
class TileView {
        /*
         * @param CDView[]
         */
        private $cards=[];
        /*
         * @param Template
         */
        private $template;
        
        /*
         * Get form field and applet views.
         */
        private function getContent(){
            $this->cards = $this->viewModel->setCards;
        }
        
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         */
        public function getTemplate($tmplFile){
            
            //nested array of subview templates
            $tmpl=[];
            foreach($this->cards as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            $this->template = new Template($tmpl,$tmplFile);
        }
        
        /*
         * Build requests and render javascript event handler functions.
         */
        private function observe(){
            //add row click protocol
            $this->observer->onClickAction = $this->viewModel->onClickCard();
            
            //echo javascript
            parent::observe();
        }
        
}
