<?php

    // $email ="yaman0923@gmail.com";
    // $name ="Chih";
    // $body ="Hey man, I'm OK!";
    // $subject ="Test email";
    
    // $headers = array(
    //     'Authorizations: Bearer '.$sendgrid,
    //     'Content-Type: application/json'
    // );

    // $data = array(
    //     "personalizations" => array(
    //         array(
    //             "to" => array(
    //                 array(
    //                     "email" => $email,
    //                     "name" => $name
    //                 )
    //             )
    //         )
    //     ),
    //     "from" => array(
    //         "email" => "Chih.W.Wang@seattlecolleges.edu"
    //     ),
    //     "subject" => $subject,
    //     "content" => array(
    //         array(
    //             "type" => "text/html",
    //             "value" => $body
    //         )
    //     )

    // );

    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // $ressponse = curl_exec($ch);

    // curl_close($ch);

    // echo "1111";
    // echo $ressponse;
  

//IT261:   
    

//require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
 require("sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("yaman0923@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("yaman0923@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
//$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
$sendgrid = new \SendGrid(SGKEY);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

?>