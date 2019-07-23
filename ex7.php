<?php
function countVowel($str)
{
    $arr = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    $d = 0;
    foreach($arr as $value) {
        if($value == 'a' 
        || $value == 'o' 
        || $value == 'i' 
        || $value == 'e' 
        || $value == 'u'
        || $value == 'A'
        || $value == 'O'
        || $value == 'I'
        || $value == 'U'
        || $value == 'E')  $d++;
    }
    echo 'Have ' . $d . ' vowel in string';
}
countVowel('tsdsd5eoiusst');
