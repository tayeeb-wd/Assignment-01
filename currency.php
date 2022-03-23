<?php

function currency(){
    $amount = 300;
$type = 'USD';

switch($type){

    case 'USD':
        $rate = 85.50;
        break;
    case 'CAD':
        $rate = 68.34;
        break;   
    case 'pound':
        $rate = 114.14;
        break;
    case 'euro':
        $rate = 94.77;
        break;
    case 'won':
        $rate = 62.43;
        break;


}


$bdt = $amount * $rate;
echo "{$amount} {$type} = {$bdt} BDT <br> ";

}