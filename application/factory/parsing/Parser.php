<?php
namespace application\delegate\input;

/**
 * 
 *
 * @package delegate
 * @author coreygelbaugh
 * @version 1.0
 */
class Parser {
    /*
     * Determine if string exists within another string.
     * 
     * @param string $find The string to search for
     * @param string $str The string to search within
     * @return bool
     */
    function strinstr($find, $str){ 
        $find = preg_quote($find); 
        if(preg_match('~'.$find.'~',$str)){ 
            return TRUE; 
        } 
        return FALSE; 
    } 
    
    public function parseXML($xmlString){
        //this is a sample xml string
        $xmlString="<?xml version='1.0'?>
        <moleculedb>
            <molecule name='Benzine'>
                <symbol>ben</symbol>
                <code>A</code>
            </molecule>
            <molecule name='Water'>
                <symbol>h2o</symbol>
                <code>K</code>
            </molecule>
        </moleculedb>";

        //load the xml string using simplexml function
        $xml = simplexml_load_string($xml_string);

        //loop through the each node of molecule
        foreach ($xml->molecule as $record)
        {
           //attribute are accessted by
           echo $record['name'], '  ';
           //node are accessted by -> operator
           echo $record->symbol, '  ';
           echo $record->code, '<br />';
        }
    }
    /*
     * Pass in a path to a folder (string), and it will print out all the items found in that folder, if it exists.
     */
    function list_files($dir)   
    {   
        if(is_dir($dir))   
        {   
            if($handle = opendir($dir))   
            {   
                while(($file = readdir($handle)) !== false)   
                {   
                    if($file != "." && $file != ".." && $file != "Thumbs.db")   
                    {   
                        echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";   
                    }   
                }   
                closedir($handle);   
            }   
        }   
    }
   
}
