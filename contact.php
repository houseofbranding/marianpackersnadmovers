<?php

$awardspaceEmail = "web_enquiry@marianpackersandmovers.com";
$recipientEmail = "dixondevassy@rediffmail.com";

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$csubject = $_REQUEST['subject'];
$number = $_REQUEST['number'];
$cmessage = $_REQUEST['message'];
$email = $_REQUEST['email'];



$from = "From: Mail Contact Form <" . $awardspaceEmail . ">";
$to = $recipientEmail;

$subject = "You have a message from Peechi Herbals Website.";

$body = "You have a message from {$fname} {$lname}  whose email is  {$email} and the subject is {$csubject} and message is {$cmessage}";

if (mail($to, $subject, $body, $from)) {
	echo 'E-mail message sent!';
} else {
	echo 'E-mail delivery failure!';
}
