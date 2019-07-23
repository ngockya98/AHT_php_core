<?php
function LargestNumber($str)
{
    echo "Input: $str <br/>";
    $partern = '/\D+/';
    $arr = explode(' ',trim(preg_replace($partern,' ',$str)));
    $max = $arr[0];
    for($i = 0;$i <= count($arr)-1; $i++) {
        $arr[$i] = (int) ($arr[$i]);
        if($max < $arr[$i]) $max = $arr[$i]; 
    }
    echo 'The Largest Number : ' . $max;
} 
LargestNumber('gh1212cdy695m1');
