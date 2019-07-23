<?php

function LongestWord($sen)
{
    echo "Input: $sen <br/>";
    $pattern = '/\W/';
    $arr = explode(' ', preg_replace($pattern, ' ', $sen));
    $max = strlen($arr[0]);
    for($i = 0; $i<count($arr)-1; $i++) {
        if($max < strlen($arr[$i+1])) {
            $max = strlen($arr[$i+1]);
        }
    }

    foreach($arr as $value) {
        if(strlen($value) == $max) {
            echo 'Output: ' . $value . '<br/>';
            break;
        }
    }
}

LongestWord('fun&!! time');
LongestWord('I love dogs');
