<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $to = "support@firekirin.games";
    $subject = "Equiry From Firekirin Website";
    
    $message = htmlspecialchars($_POST['message']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $mobileNumber = htmlspecialchars($_POST['mobile']);


    $body = "First Name: $firstname\n";
    $body .= "Last Name: $lastname\n";
    $body .= "Email Id: $email\n";
    $body .= "Mobile Number: $mobileNumber\n";
    $body .= "Message: $message\n";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    $headers .= "From: $emailId" . "\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, will get back to you soon..";
    } else {
        echo "Failed to send email.";
    }
}
?>