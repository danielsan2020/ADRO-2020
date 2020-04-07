<?php

if($_POST["submit"]) {
    $recipient="info@adrosl.com";
    $subject="Tienes un mensaje nuevo";
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
    switch ($senderSubject) {
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

    $mailBody="Name: $sender\n Phone: $senderPhone\n City: $senderCity\n Email: $senderEmail\n Meet: $senderMeet\n Subject: $senderSubject\n Message: $message\n";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

}

// <?php

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {

//         // access
//         $secretKey = '___enter_secret_key___';
//         $captcha = $_POST['g-recaptcha-response'];

//         if(!$captcha){
//           echo '<p class="alert alert-warning">Por favor presiona el captcha.</p>';
//           exit;
//         }

//         $mail_to = "info@local-marketing.es";
        
//         # Sender Data
//         $subject = trim($_POST["subject"]);
//         $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
//         $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
// 		$phone = trim($_POST["phone"]);
// 		$city = trim($_POST["city"]);
// 		$option = trim($_POST["option"])
// 		switch ($option) {
// 			case '1':
// 			$mail_to = 'info@local-marketing.es';
// 				break; 
// 			case '2':
// 			$mail_to = 'info@local-marketing.es';
// 				break;
// 			case '3':
// 			$mail_to = 'info@local-marketing.es';
// 				break;
// 			case '4':
// 			$mail_to = 'info@local-marketing.es';
// 				break;
// 		$message = trim($_POST["message"]);
		
        
//         if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
//             # Set a 400 (bad request) response code and exit.
//             http_response_code(400);
//             echo '<p class="alert alert-warning">Por favor completa los campos necesarios.</p>';
//             exit;
//         }

//         $ip = $_SERVER['REMOTE_ADDR'];
//         $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
//         $responseKeys = json_decode($response,true);

//         if(intval($responseKeys["success"]) !== 1) {
//           echo '<p class="alert alert-warning">Por favor presiona el captcha.</p>';
//         } else {
//             # Mail Content
//             $content = "Name: $name\n";
//             $content .= "Email: $email\n\n";
    // 			$content .= "Phone: $phone\n";
    // 			$content .= "City: $city\n";
    // 			$content .= "Option: $option\n";
//             $content .= "Message:\n$message\n";

//             # email headers.
//             $headers = "From: $name <$email>";

//             # Send the email.
//             $success = mail($mail_to, $subject, $content, $headers);
//             if ($success) {
//                 # Set a 200 (okay) response code.
//                 http_response_code(200);
//                 echo '<p class="alert alert-success">Gracias! Tu mensaje fue enviado.</p>';
//             } else {
//                 # Set a 500 (internal server error) response code.
//                 http_response_code(500);
//                 echo '<p class="alert alert-warning">Oops! Algo salió mal, revisa de nuevo.</p>';
//             }
//         }

//     } else {
//         # Not a POST request, set a 403 (forbidden) response code.
//         http_response_code(403);
//         echo '<p class="alert alert-warning">Hay algún problema en tu registro, inténtalo de nuevo.</p>';
//     }

// ?>