<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $experience = $_POST['experience'];
  $why_interested = $_POST['why_interested'];

  // Construct the email message
  $to = "mcdonaldlog68@outlook.com";
  $subject = "New Staff Application Submission";
  $message = "Name: $name\nEmail: $email\nPosition: $position\nExperience: $experience\nAvailability: $availability\nWhy Interested: $why_interested";
  $headers = "From: explodecode-help-business@outlook.com\r\n" . "Content-type: text/plain; charset=UTF-8\r\n";

  // Send the email
  mail($to, $subject, $message, $headers);

  // Confirm the submission
  echo "Thank you for submitting your application! We will review it shortly.";
}

?>
