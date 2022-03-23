

<?php


// CAP


function cap(){
    echo rand (1000, 9999); 
}

?>




<?php


// OTP

function otp(){
    $code =  str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
    echo substr($code, 3, 4) ;
}


?>



<?php


// Password


function pass(){

    $name = 'AFROZA AKTER';
    echo password_hash($name, PASSWORD_DEFAULT) ;
}

?>