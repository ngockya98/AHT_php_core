<?php
function reverseVowels($str)
{
    echo 'Input: '. $str . '<br/>';
    $arr = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    foreach($arr as $key => $value) {
        if($value == 'a' 
        || $value == 'o' 
        || $value == 'i' 
        || $value == 'e' 
        || $value == 'u'
        || $value == 'A'
        || $value == 'O'
        || $value == 'I'
        || $value == 'U'
        || $value == 'E') {
            $arrIndex []= $key;
            $arrVowels []= $value;
        }      
    }
    $arrVowels = array_reverse($arrVowels);
    $stt = 0;
    foreach($arrIndex as $index) {
        array_splice($arr,$index,1,$arrVowels[$stt]);
        $stt++;
    }
    $output = '';
    foreach($arr as $value) {
        $output .= $value;
    }
    echo 'Output: ' . $output . '<br/>';
}

reverseVowels("Hello!");
reverseVowels('Tomatoes!');
reverseVowels("Reverse Vowels In A String");
