<?php 
//bài 1
    function reverseNumber ($x)
    {
        $y = strrev($x);
        $y = (float)$y;

        return $y;
    }
    
    echo reverseNumber(12345).'<br>';
    echo reverseNumber(123450).'<br>';

//bài 2
    function zeroSum2($e = array())
    {
        foreach ($e as $value) {
            $h = $value;
            
            for ($g = $h + 1; $g < 100; $g++) {
                $i = [$g, $h];
                if (array_sum($i) == 0) {
                    echo "<pre>";
                    print_r($i);
                    echo "</pre>";
                }
            }
        }
    }

    zeroSum2(array(-1,0,1,2,-2));

//bài 3
    function checkPalindrome($string)   
    {  
        if($string == strrev($string))  
            return 1;  
        else  
            return 0;  
    }


    echo "<hr>";

//bài 4
    function a($n)
    {
            for($i=0; $i <= $n; $i++) {
                for($u = $n; $u > $i; $u--) { 
                echo "&nbsp&nbsp";
                }
                for($u = 0; $u < $i; $u++) { 
                echo "*";
                }
                for($u = 1; $u < $i; $u++) { 
                echo "*";
                }
                echo "<br>";   
            } 
    }

    a(4);

//    *
//   ***
//  *****
// *******
//*********

echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp***<br>";
echo "&nbsp&nbsp&nbsp&nbsp*****<br>";
echo "&nbsp&nbsp*******<br>";
echo "*********<br>";



 ?>