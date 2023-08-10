<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$to = "sowntharya05092002@gmail.com";
$subject = "Mail from website";

$headers = "From: ".$name. "\r\n".  
"CC:sowntharya05092002@gmail.com";

$txt = "You have  received an e-mail from".$name."\r\nEmail: " .$email."\r\n
Phone: ".$phone;

if($email!=NULL){
    mail($to, $subject,$txt,$headers);
}





















?>