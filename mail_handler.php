<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];
 
$toEmail = "webmaster@mandel4congress.org";
$subject = "From Contact Us form M4C";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "Phone = ". $phone . "\r\n  Subject = "
    . $subject . "\r\n Message =" . $message;
 
$headers = "From: noreply@mandel4congress.org";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:thanks.html");
?>