<?php

if($_POST["submit"]) {
    $recipient="hola@mail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderPhone=$_POST["senderPhone"];
    $senderCity=$_POST["senderCity"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $senderMeet = $_POST['senderMeet'];
    switch ($visitor) {
        case 'senderMeet1':
        $mail_to = hola@mail.com';
        break;
    case 'senderMeet2':
        $mail_to = hola@mail.com';
        break;
    case 'senderMeet3':
        $mail_to = hola@mail.com';
        break;
    case 'senderMeet4':
        $mail_to = hola@mail.com';
        break;
}

$senderSubject = $_POST['senderSubject'];
switch ($visitor) {
    case 'senderSubject1':
    $mail_to = hola@mail.com';
        break;
    case 'senderSubject2':
    $mail_to = hola@mail.com';
        break;
    case 'senderSubject3':
    $mail_to = hola@mail.com';
        break;
    case 'senderSubject4':
    $mail_to = hola@mail.com';
        break;
    case 'senderSubject5':
    $mail_to = hola@mail.com';
        break;
    case 'senderSubject6':
    $mail_to = hola@mail.com';        
        break;
}

senderSubject1

    $mailBody="Name: $sender\n Phone: $senderPhone\n City: $senderCity\n Email: $senderEmail\n Meet: $senderMeet\n Subject: $senderSubject\n Message: $message\n";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

}