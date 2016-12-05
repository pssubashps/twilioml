<?php
include "vendor/autoload.php";


use Twilio\Twiml;
$phone = $_POST['PhoneNumber'];

        $response = new Twiml();
        $callerIdNumber = '917907655876';

        $dial = $response->dial(['callerId' => $callerIdNumber,'timeLimit'=>50]);

        $phoneNumberToDial = $phone;

         $dial->number($phoneNumberToDial);

header('Content-Type: text/xml');
echo $response;
