<?php
include "vendor/autoload.php";


use Twilio\Twiml;
$phone = $_POST['PhoneNumber'];

        $response = new Twiml();
        $callerIdNumber = '919496842554';

        $dial = $response->dial(['callerId' => $callerIdNumber]);

        $phoneNumberToDial = $phone;

         $dial->number($phoneNumberToDial);

header('Content-Type: text/xml');
echo $response;
