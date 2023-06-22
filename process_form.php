<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Validate and sanitize the form data (you can add your own validation here)

  // Send an email notification
  $to = "ajslaterhb22@gmail.com";
  $subject = "New Contact Form Submission";
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Phone: $phone\n";
  $email_content .= "Message: $message\n";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $email_content, $headers)) {
    // Email sent successfully
    echo "Thank you for your message. We will get back to you soon.";
  } else {
    // Email failed to send
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
} else {
  // Redirect or display an error message if someone tries to directly access process_form.php
  echo "Access denied.";
}
?>
