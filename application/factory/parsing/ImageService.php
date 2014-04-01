<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace application\factory\services;

/**
 * Description of ImageService
 *
 * @author coreygelbaugh
 * @version 1.0
 */
class ImageService {
    /*
     * 
     */
    public function getDominantColor($i){
        $i = imagecreatefromjpeg("image.jpg");

        for ($x=0;$x<imagesx($i);$x++) {
            for ($y=0;$y<imagesy($i);$y++) {
                $rgb = imagecolorat($i,$x,$y);
                $r   = ($rgb >> 16) & 0xFF;
                $g   = ($rgb >>16)& 0xFF;
                $b   = $rgb & 0xFF;

                $rTotal += $r;
                $gTotal += $g;
                $bTotal += $b;
                $total++;
            }
        }

        $rAverage = round($rTotal/$total);
        $gAverage = round($gTotal/$total);
        $bAverage = round($bTotal/$total);
    }
    /*
     * 
     */
    function toHex($N) { 
        if ($N==NULL) return "00"; 
        if ($N==0) return "00"; 
        $N=max(0,$N);  
        $N=min($N,255);  
        $N=round($N); 
        $string = "0123456789ABCDEF"; 
        $val = (($N-$N%16)/16); 
        $s1 = $string{$val}; 
        $val = ($N%16); 
        $s2 = $string{$val}; 
        return $s1.$s2; 
    } 


    /*
     * Converts an RGB color to a hexadecimal.
     */
    function rgb2hex($r,$g,$b){ 
        return toHex($r).toHex($g).toHex($b); 
    } 
    
    /*
     * Converts a hexadecimal to RGB.
     */
    function hex2rgb($N){ 
        $dou = str_split($N,2); 
        return array( 
            "R" => hexdec($dou[0]),  
            "G" => hexdec($dou[1]),  
            "B" => hexdec($dou[2]) 
        ); 
    } 
    
    /*
     * Returns an encoded string to embed images, inline, inside your html/css 
     * code and reduce the number of calls to the server and speed up page load.
     * 
     * @link http://www.barattalo.it/2013/12/04/embedding-images-html-css-php/ 
     */
    function encodeimg($file) { 
        $contents = file_get_contents($file); 
        $base64 = base64_encode($contents); 
        $imagetype = exif_imagetype($file); 
        $mime = image_type_to_mime_type($imagetype); 
        return "data:$mime;base64,$base64"; 
    } 
}
