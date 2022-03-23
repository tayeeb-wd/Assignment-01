
<?php

include_once "./OTP.php";




otp();


?>







<?php


// CAPSA


echo rand(1000, 9999); 

?>

<br>
<?php


// OTP

$code =  str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
echo substr($code, 3, 4);


?>
<br>
<br>

<?php


// Password


$name = 'Niloy Chowdhury';
echo password_hash($name, PASSWORD_DEFAULT)

?>










