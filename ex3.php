<?php

function returnValueOfArray(array $arr, $start, $finish = 0)
{
    if($start <0) {
        return $arr[0];
    }
    if($finish == 0 || $finish <= $start) {
        return $arr[$start];
    }else {
        $result = '';
        for($i = $start; $i <= $finish; $i++) {
            $result .= $arr[$i];
        }
        return $result;
    }
}
function createPhoneNumber(array $arr)
{
    $partern = '/^[0-9]$/';
    foreach($arr as $value) {
        if(!preg_match($partern, $value) || count($arr) < 10) {
            echo 'This array not true with conditions !!!';
            return;
        } 
    }
    $rs = '(' . returnValueOfArray($arr,0,2) . ') ' 
    . returnValueOfArray($arr,3,5) 
    . '-' 
    . returnValueOfArray($arr,6,9);
    echo $rs;
}

createPhoneNumber([3,5,6,8,3,5,5,5,5,1,9]);
