<?php
function process(array $arr)
{
    $index = array_search('#',$arr) - 1;
    array_splice($arr,$index,1);
    var_dump($arr);
    if(in_array('#',$arr)) {
        process($arr);
    }
}
function convertString($str)
{
    //convert string to array with each character to one element of array
    $arr = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    process($arr);
    var_dump($arr);
}
convertString('64#');  
