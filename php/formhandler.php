<?php
// Check for empty fields
if(empty($_POST['firstName'])      ||
   empty($_POST['lastName'])     ||
   empty($_POST['email'])     ||
   // empty($_POST['phone'])     ||
   empty($_POST['address'])   ||
   empty($_POST['postcode'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }


$title = strip_tags(htmlspecialchars($_POST['title']));
$firstName = strip_tags(htmlspecialchars($_POST['firstName']));
$lastName = strip_tags(htmlspecialchars($_POST['lastName']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$address2 = strip_tags(htmlspecialchars($_POST['address2']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$supportedLiving = strip_tags(htmlspecialchars($_POST['supportedLiving']));
$pets = strip_tags(htmlspecialchars($_POST['pets']));
$frequency = strip_tags(htmlspecialchars($_POST['frequency']));
$service = strip_tags(htmlspecialchars($_POST['service']));
$notifyMe = strip_tags(htmlspecialchars($_POST['notifyMe']));
// $phone = strip_tags(htmlspecialchars($_POST['phone']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'info@featherlady.co.uk'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $firstName";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $title $firstName $lastName\n\nEmail: $email_address\n\n Address: $address ,\n\n$address2,\n\n $city, \n\n $postcode \n\n Service: $service \n\n Frequency: $frequency \n\n Supported Living?: $supportedLiving\n\n Pets?: $pets ";
$headers = "From: noreply@FeatherLady.co.uk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header("formsent.html")
return true;
?>
