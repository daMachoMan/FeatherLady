<?PHP
  // form handler
  if($_POST && isset($_POST['sendfeedback'], $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {

    $FirstName = $_POST['FirstName'];
    $Lastame = $_POST['LastName'];
    $email = $_POST['Email'];
    // address info
    $Address1 = $_POST['Address1l'];
    $Address2 = $_POST['Address2]'];
    $City = $_POST['City'];
    $County = $_POST['County'];
    $Postcode = $_POST['Postcode'];
    // addition form questions
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(!$name) {
      $errorMsg = "Please enter your Name";
    } elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      $errorMsg = "Please enter a valid Email address";
    } elseif(!$message) {
      $errorMsg = "Please enter your comment in the Message box";
    } else {
      // send email and redirect
      $to = "pkatema5@gmail.com";
      if(!$subject) $subject = "Contact from website";
      $headers = "From: webmaster@example.com" . "\r\n";
      mail($to, $subject, $message, $headers);
      header("Location: http://www.example.com/thankyou.html");
      exit;
    }

  }
