<?php
// Check for empty fields
if(empty($_POST['fname'])  		||
   empty($_POST['lname'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject'])  	||
   empty($_POST['message'])	    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo 'No arguments Provided!';
	return false;
   }
	
$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$email_address = ($_POST['email']);
$subject = ($_POST['subject']);
$message = ($_POST['message']);
	
// Create the email and send the message
$to = 'aniruddha@fireblazeaischoo.in'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "$subject";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $fname $lname\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@ganeshbhadra404@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
// for checking if $variable is working or not!!!
echo "$fname \n $lname \n $email_address \n $subject \n $message";
mail($to,$email_subject,$email_body,$headers);
return true;
// header("Location: ../run/contact.php?mail=Sent");			
?>