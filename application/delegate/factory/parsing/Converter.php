<?php
namespace application\delegate\input;

/**
 * 
 *
 * @package delegate
 * @author coreygelbaugh
 * @version 1.0
 */
class Converter {
    
    /*
     * Generate a .csv file from a PHP array.
     * 
     * @param $data 
     * @param $delimiter csv delimeter (default is a comma)
     * @param $enclosure csv enclosure (default is a double quote)
     */
    public function generateCsv($data, $delimiter = ',', $enclosure = '"') {
        $handle = fopen('php://temp', 'r+');
        foreach ($data as $line) {
            fputcsv($handle, $line, $delimiter, $enclosure);
        }
        rewind($handle);
        while (!feof($handle)) {
            $contents .= fread($handle, 8192);
        }
        fclose($handle);
        return $contents;
    }
    
    /*
     * This new updated ASCII converter supports alpha channels, 
     * so for this code to work you need a browser that supports CSS3 
     * Aplah Channels. Convert any GD supported image into ASCII art.
     * 
     * @param $image
     */
    public function imageToASCII($image){
        $image = 'image.jpg'; 
        // Supports http if allow_url_fopen is enabled 
        $image = file_get_contents($image); 
        $img = imagecreatefromstring($image); 

        $width = imagesx($img); 
        $height = imagesy($img); 

        for($h=0;$h<$height;$h++){ 
            for($w=0;$w<=$width;$w++){ 
                $rgb = imagecolorat($img, $w, $h); 
                $a = ($rgb >> 24) & 0xFF; 
                $r = ($rgb >> 16) & 0xFF; 
                $g = ($rgb >> 8) & 0xFF; 
                $b = $rgb & 0xFF; 
                $a = abs(($a / 127) - 1); 
                if($w == $width){ 
                    echo '<br>'; 
                }else{ 
                   echo '<span style="color:rgba('.$r.','.$g.','.$b.','.$a.');">#</span>'; 
                } 
            } 
        } 
    }
}
