<?php
if($_POST["submit"]){

    $recipient="adeshinafavour4@gmail.com.add$subject="Form to email message";
$sender=$_POST["sender"];
$message=$_POST["message"]
    $mailBody="Name:$sender\nPhoneNumber:
    $senderPhoneNumber\n\n$message";

    mail($recipient,$subject, $mailBody,
    "From: $sender<$senderEmail>"};
    
    $thankYou="<p>Thank you! Your message has been sent. </p>";
}
?>