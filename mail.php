<?php
//get data from form  
$name = $_GET['name'];
$email= $_GET['email'];
$message= $_GET['message'];
$to = "david-agina@outlook.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@davidagina.github.io" . "\r\n" .
"CC: ;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>