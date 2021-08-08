<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to = "mariejoseetekoe@gmail.com";

$subject = "mail for github";
$txt = "name = ". $name . "\r\n email= " . $email . "\r\n message =" . $message; 
$headers = "from : mariejoseetekoe@gmail.com" . "\r\n". "CC:
mariejoseetekoe@gmail.com";
if($email !=NULL){
    mail($to,$subject,$txt,$headers);
}
header ("location :merci.html")
?>