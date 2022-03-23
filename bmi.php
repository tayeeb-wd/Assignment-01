<?php

function getBMI($weight , $height){
    $bmi = $weight/($height*$height);

    if($bmi < 18.5){
        return " you are under weight <br>";
    }elseif($bmi >= 18.5 && $bmi<25){
        return "you are normal <br>";
    }elseif($bmi >= 25 && $bmi<30){
        return "you should loss your weight <br>";
    }elseif($bmi>=30){
        return "it's really bed for your health <br>";
    }
}