<?php

if($_POST["submit"]) {
    $recipient="info@adrosl.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderPhone=$_POST["senderPhone"];
    $senderCity=$_POST["senderCity"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $senderMeet = $_POST['senderMeet'];
    switch ($senderMeet) {
        case 'senderMeet1':
        $mail_to = 'info@adrosl.com';
        break; 
    case 'senderMeet2':
        $mail_to = 'info@adrosl.com';
        break;
    case 'senderMeet3':
        $mail_to = 'info@adrosl.com';
        break;
    case 'senderMeet4':
        $mail_to = 'info@adrosl.com';
        break;
}

    $senderSubject = $_POST['senderSubject'];
    switch ($senderMeet) {
        case 'senderSubject1':
        $mail_to = 'info@adrosl.com';
            break;
        case 'senderSubject2':
        $mail_to = 'info@adrosl.com';
            break;
        case 'senderSubject3':
        $mail_to = 'info@adrosl.com';
            break;
        case 'senderSubject4':
        $mail_to = 'info@adrosl.com';
            break;
        case 'senderSubject5':
        $mail_to = 'info@adrosl.com';
            break;
        case 'senderSubject6':
        $mail_to = 'info@adrosl.com';        
            break;
}

// es correcto este sender subject1, no le encuentro sentido
senderSubject1 

    $mailBody="Name: $sender\n Phone: $senderPhone\n City: $senderCity\n Email: $senderEmail\n Meet: $senderMeet\n Subject: $senderSubject\n Message: $message\n";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

}