<?php
/**
 * Created by PhpStorm.
 * User: deepikagill
 * Date: 25/07/18
 * Time: 9:50 PM
 */
function factorial($num) {
    $fact = 1;
    while ($num>0){
        $fact *= $num;
        --$num;
    }

echo $fact;
}

factorial(-3);