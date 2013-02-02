<?php

// CUSTOMIZATION START

$subscribe = "youremailaddress@domain.com";  // insert your subscribe email address here

// CUSTOMIZATION END

if (count($_POST) == 0) die("");


$from = $_POST["email"];


$to = $subscribe;
$subject = "subscribed to the newsletter"; //subscribe email subject line & content

$header = "From: $from\n";

if (!mail($to, $subject, $subject, $header,"-f$from")) {
  if (!mail($to, $subject, $subject, $header)) {
        mail($to, $subject, $subject);
  }
}

?>
