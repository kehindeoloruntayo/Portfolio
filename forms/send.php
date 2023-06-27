<?php


// $Useremail= $_POST['email'];
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$description= $_POST['message'];








 $to = 'kehindeolohuntayo1@gmail.com'; // replace this mail with yours
// $number = $_POST["number"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$message = " name is : {$name}. <br> email is: {$email} <br> subject is: {$subject} <br> message is: {$description}";
 
if (@mail($to, $email, $message, $headers))
{
"<script> alert('The message has been sent') </script>" ;
    echo 'The message has been sent.';
}else{
    "<script> alert('failed') </script>" ;
}



         


?>