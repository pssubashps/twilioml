<?php
include "vendor/autoload.php";


use Twilio\Twiml;


        $response = new Twiml();
        $callerIdNumber = '919496842554';

        $dial = $response->dial(['callerId' => $callerIdNumber]);

        $phoneNumberToDial = '+919901057647';

         $dial->number($phoneNumberToDial);

header('Content-Type: text/xml');
echo $response;
