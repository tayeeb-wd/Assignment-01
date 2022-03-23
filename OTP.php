<?php 


function otp(){
$code =  str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
echo substr($code, 3, 4);
}




?>