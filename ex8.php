<?php
function convertNumber($num)
{
    if(!is_numeric($num)) {
        echo 'Input is not true with condition';
        return;
    }
    else {
        echo 'Input: ' . $num . '<br/>';
        echo 'Output: ' . number_format($num,3,'.',',');
    }
}

convertNumber(454564456.123122);
