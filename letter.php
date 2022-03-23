<?php

function lettersize($type = 'u' , $text = null){

    $text_type = ' ';

    switch ($type){
        case 'u':
            $text_type = 'uppercase';
            break;

        case 'l':
            $text_type = 'lowercase';
            break;

        default:
            $text_type = 'uppercase';
            break;
    }


    echo " <span style = 'text-transform: {$text_type};'> {$text} </span> <br> ";

}