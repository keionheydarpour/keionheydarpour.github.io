<?php
  $fname = $_POST['fname']
  $lname = $_POST['lname']
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];

  $email_from = 'keionheydarpour@gmail.com'

  $email_subject = "New Form Submission";

  $email_body = "User Name: $fname $lname. \n".
                  "User Email: $visitor_email. \n".
                    "User Mesage: $subject. \n";
  $to = "keionheydarpour@gmail.com"

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: contact.html")
?>
