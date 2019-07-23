<?php
function mostPopularChar($str)
{
    //convert string to array with each character to one element of array
    $arr = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    $new_arr = (array_count_values($arr));
    arsort($new_arr);
    foreach($new_arr as $key => $value) {
        $max = $value;
        break;
    }
    foreach($new_arr as $key => $value) {
        if($value == $max) {
            echo 'Character ' . "'" . $key . "'" . ' appear ' . $value . ' times <br/>' ;
        }
    }
}

mostPopularChar('abab#SDSSDa');
