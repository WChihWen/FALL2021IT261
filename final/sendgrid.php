<?php

    $email ="yaman0923@gmail.com";
    $name ="Chih";
    $body ="Hey man, I'm OK!";
    $subject ="Test email";
    
    $sendgrid = new \SendGrid(SGKEY);
    $headers = array(
        'Authorizations: Bearer '.$sendgrid,
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email,
                        "name" => $name
                    )
                )
            )
        ),
        "from" => array(
            "email" => "Chih.W.Wang@seattlecolleges.edu"
        ),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body
            )
        )

    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $ressponse = curl_exec($ch);

    curl_close($ch);

    echo "1111";
    echo $ressponse;

?>