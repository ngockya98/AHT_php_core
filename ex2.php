<?php

function LetterChanges($str)
{
    echo "Input: $str <br/>";
    //convert string to array with each character to one element of array
    $arr = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    $new_str = '';
    foreach($arr as $value) {
        if(97 <= ord($value) && ord($value) < 122) {
            $value = chr(ord($value)+1);
        }
        if(ord($value) == 122) {
            $value = chr(97);
        }
        if($value == 'a' 
        || $value == 'o' 
        || $value == 'i' 
        || $value == 'e' 
        || $value == 'u'
        || $value == 'A'
        || $value == 'O'
        || $value == 'I'
        || $value == 'U'
        || $value == 'E')  {
            $value = chr(ord($value) - 32);
        }
        $new_str .= $value;
    }
    echo "Output: $new_str <br/>";
}

LetterChanges('hello*3');
LetterChanges('fun times!');
