<?php

// if(isset($_POST['submit'])){
//     $message = $_POST['name'];
//     $subject = $_POST['subject'];
//     $mailFrom = $_POST['mail'];
//     $message = $_POST['message '];


// $mailTo = "oasuncionjr@weekendgolfersclub.com";
// $headers = "From: ".$mailFrom;
// $txt = " You have received an e-mail from ".$name.".\n\n".$message;

// mail($mailTo, $subject, $txt, $headers);

// header("Location: index.php?mailsend");

// }

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    
        //submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = "oasuncionjr1961@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to, $messageSubject, $body);
        $message_sent = true;
    
}
?> 