<?php




function grade (){
    $mark = 70;


if($mark >= 0 && $mark <= 32){

    echo "Your Grade is: F = GPA is 0 <br>";
}
elseif($mark >= 33 && $mark <= 39){

    echo "Your Grade is: D = GPA is 1 <br>";
}
elseif($mark >= 40 && $mark <= 49){

    echo "Your Grade is: C = GPA is 2 <br>";
}
elseif($mark >= 50 && $mark <= 59){

    echo "Your Grade is: B = GPA is 3 <br>";
}
elseif($mark >= 60 && $mark <= 69){

    echo "Your Grade is: A- = GPA is 3.5 <br>";
}
elseif($mark >= 70 && $mark <= 79){

    echo "Your Grade is: A = GPA is 4 <br>";
}
elseif($mark >= 80 && $mark <= 100){

    echo "Your Grade is: A+ = GPA is 5 <br>";
}

else{
    echo "Sorry your result is: Fail <br>";
}

}