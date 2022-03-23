

<?php

function getArea($type='r', $length, $width=null){

    $area = '';
    $area_type = '';

    switch ($type) {
        case 'r':
            $area = $length * $width;
            $area_type = 'Rectangle';
            break;

        case 's':
            $area = $length * $length;
            $area_type = 'Square';
            break;

        case 't':
            $area = 0.5 * ($length * $width);
            $area_type = 'Triangle';
            break;

        case 'c':
            $area = 3.1416 * ($length * $length);
            $area_type = 'Circle';
            break;
        
        default:
            $area = 'undefiend';
            $area_type = 'undefiend';
            break;
    }

    return "Area of this {$area_type} is {$area} <br>";

}