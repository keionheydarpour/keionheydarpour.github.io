<?php
if (isset($_POST['submit'])){
  $fname = $_POST['fname']
  $lname = $_POST['lname']
  $mailFrom = $_POST['email']
  $subject = $_POST['subject']

  $mailTo="keionheydarpour@hotmail.com"
  $headers= "From: ".$mailFrom;
  $txt = "You have received an email from ".$fname" ".$lname".\n\n".$subject;

  mail($mailTo, $txt, $headers);
  header("Location: contact.html?mailsend");
?>
