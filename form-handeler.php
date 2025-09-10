<?php
$name =  $_POST['name'];
$visitor_email =  $_POST['email'];
$contact =  $_POST['contact'];
$message =  $_POST['message'];

$email_from = 'rohitkumbhar1229@gmail.com';
$email_subject ="New Customer Inquiry from Delecacy Website";
$email_body = "user name: $name.\n ".
              "user email: $visitor_email.\n".
              "user contact: $contact.\n".
              "user message: $message.\n";

   $to = '20220802069@dypiu.ac.in';
   
   $headers = "form: $email_form \r\n";
   $headers = "Reply-To: $visitor_email \r\n";

   mail($to,$email_subject,$email_body,$headers);
   header("Location: contact.html");

?>




<?php
$name =  $_POST['name'];
$visitor_email =  $_POST['email'];
$contact =  $_POST['contact'];
$message =  $_POST['message'];

$email_from = 'rohitkumbhar1229@gmail.com';
$email_subject ="New Customer Inquiry from Delecacy Website";
$email_body = "user name: $name.\n ".
              "user email: $visitor_email.\n".
              "user contact: $contact.\n".
              "user message: $message.\n";

   $to = '20220802069@dypiu.ac.in';
   
   $headers = "form: $email_form \r\n";
   $headers = "Reply-To: $visitor_email \r\n";

   mail($to,$email_subject,$email_body,$headers);
   header("Location: contact.html"); 
?>