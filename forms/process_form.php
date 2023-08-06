<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  
  // Send an email with the form data
  $to = "anita.mayousse@gmail.com"; // Replace with your email address
  $subject = "Wedding RSVP";
  $message = "Name: $name\nEmail: $email";
  $headers = "From: $email";
  
  mail($to, $subject, $message, $headers);
  
  // Redirect the user to a thank you page
  header("Location: thank_you.html"); // Replace with the URL of your thank you page
  exit;
}
?>
