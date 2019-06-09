<?php
$name = "$name";
$email = "$email";
$message = "$message";
$headers = "From:" . $name;

$to = "alexmojnov@gmail.com";
$form = mail($to,$name,$message,$headers);
if($form){
    echo "We've recived your contact information";
    }
    else {
    echo "ERROR";
    }
    ?>