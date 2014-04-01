<?php
namespace application\view\containers;
    use \application\view\CDView as CDView;
    use \application\view\protocol\Navigational as Navigational;

/**
 * Class for tiling cards or multimedia collections.
 *
 * @package view
 * @author coreygelbaugh
 * @version 1.0
 */
class GalleryView {
        
        private $folders;
        private $files;
        
        /*
         * Get form field and applet views.
         */
        private function getContent(){
            $this->folders = $this->viewModel->setFolders;
            $this->files = $this->viewModel->setFiles;
        }
        
        /*
         * Build template tree that will later display html content.
         * 
         * @param string $tmplFile Url that contains template html
         * @return Template
         */
        public function getTemplate($tmplFile){
            
            //nested array of subview templates
            $tmpl=[];
            foreach($this->folders as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            foreach($this->files as $subview){
                $tmpl[] = $subview->getTemplate();
            }
            return new Template($tmpl,$tmplFile);
        }
}
