<?php


namespace application\library\factory;

/**
 * Description of Generator
 *
 * @author coreygelbaugh
 * @version 1.0
 */
class Generator {
    /*
    * Generate random password from a set of chars ($pool)
    * 
    * @param   integer $len    Password length
    * @return  string  Rand password
    */
   private function generateRandomPasswd($len = 10) {
       $string = '';
       $pool = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
       for($i = 1; $i <= $len; $i ++) {
           $string .= substr ( $pool, rand ( 0, 61 ), 1 );
       }

       return $string;
   }
   
   /**
    * Generates a random string of a given length and character set.
    * @param int $l The length of the resulting string
    * @param string $c The character set
    * @return string The random sequence
    */
   function mt_rand_str ($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890') {
           for ($s = '', $cl = mb_strlen($c)-1, $i = 0; $i < $l; $s .= mb_substr($c, mt_rand(0, $cl), 1), ++$i);
           return $s;
   }
   
   function prime($num1, $num2) {
    $prime_numbers = array ();
    while ( $num1 < $num2 ) {
        $isprime=true;
        for($i = 2; $i <= sqrt ( $num1 ); $i ++) {
            if ($num1 % $i == 0)
                $isprime=false;
        }
 
        if ( $isprime ) {
            $prime_numbers [] = $num1;
        }
        $num1 ++;
        }
        return $prime_numbers;
    }
    
    /*
     * Used to generate a random amount of random letters, uppercase, lowercase, and numbers. 
     * You can add more characters in the $chars array, separating with "," after each, 
     * with no "," at the end. Enjoy!
     */
    function randomAlphaNum($amount){ 
        $numchars = $amount; 
        $chars = explode(',','a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9'); 
        $random=''; 
        for($i=0; $i<$numchars;$i++)  { 
          $random.=$chars[rand(0,count($chars)-1)]; 
        }  
        return $random; 
        }
}
