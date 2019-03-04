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
$postcode = strip_tags(htmlspecialchars($_POST['postcode']));
$supportedLiving = strip_tags(htmlspecialchars($_POST['supportedLiving']));
$pets = strip_tags(htmlspecialchars($_POST['pets']));
$frequency = strip_tags(htmlspecialchars($_POST['frequency']));
$service = strip_tags(htmlspecialchars($_POST['service']));

$to = 'info@FeatherLady.co.uk';
$email_subject = "New enquiry:  $firstName";
$email_body = "You have received and enquiry from your website contact form.\n\n Here are the details:\n\n\n Name: $title $firstName $lastName\n\n\n Email: $email_address \n\n\n Address: $address ,\n $address2 ,\n $city ,\n $postcode\n\n\n Is it supported living? $supportedLiving\n\n\n Which service? $service\n\n\n Has Pets? $pets\n\n\n How often? $frequency\n\n\n";
$headers = "From: noreply@FeatherLady.co.uk\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header("Location: ../formsent.html");
return true;
?>
