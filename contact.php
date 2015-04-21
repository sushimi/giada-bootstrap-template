<?php
if(isset($_POST['submit']))
{
 $name= trim(strip_tags($_POST['name']));
$email= trim(strip_tags($_POST['email']));
$message= trim(strip_tags($_POST['message']));
 
$header = "From: $email\n" . "Reply-To: $email\n";
//subject of the email
$subject = "Your subject";
//insert your email here
        $email_to = "your@email.com";
		
header("refresh:2; url=index.html"); 
 
if(mail($email_to, $subject , $category, $message ,$header ))
{
 echo "Your message was succesfully sent! Thank you for contacting us";
}
else
{
 echo "There was a problem in sending your message. Please try again.";
}
}
?>