<?php
function exchangedArray(array $arr1, array $arr2)
{
    echo '<pre>';
    echo 'input: ';
    echo 'Array 1 :<br/>';
    print_r($arr1);
    echo '<pre/>';
    echo 'Array 2 :<br/>';
    echo '<pre>';
    print_r($arr2);
    echo '<pre/>';
    /*Reverse and exchange two array together*/
    $arr1 = array_reverse($arr1);
    $arr2 = array_reverse($arr2);
    $arr_tg = $arr1;
    $arr1 = $arr2;
    $arr2 = $arr_tg;
    /*--Reverse and exchange two array together--*/
    echo 'Output: ';
    echo 'Array 1 :<br/>';
    echo '<pre>';
    print_r($arr1);
    echo '<pre/>';
    echo 'Array 2 :<br/>';
    echo '<pre>';
    print_r($arr2);
    echo '<pre/>';
}

exchangedArray([1,2,3,4], ['sd','ad',45]);
 