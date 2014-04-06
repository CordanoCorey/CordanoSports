<?php
namespace application\professor;
use application\professor\Information as Information;

/**
 * DrCordano is the session moderator. Its job is to conduct searches, pose questions,
 * and answer questions, given the information available.
 *
 * @package professor
 * @author coreygelbaugh
 * @version 1.0
 */
class DrCordano {
    
    /*
    * @param DbSpace Complete specification of the Cordano server-side application
    */
    private $dbSpace;
    /*
     * @param Information Object to represent our current knowledge about the intended database query
     */
    private $information;
    /*
     * @param application\delegate\input\ClientRequest $request
     */
    public function __construct($info){
        
        $this->information = $info;
    }
   
    /*
     * Update complete database specification.
     */
    private function reloadDbSpace(){
        
    }
    
    /*
     * Send database reference object to model element.
     */
    public function getDbRef($sender){
        
    }
    
}
