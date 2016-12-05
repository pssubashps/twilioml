<?php
include "vendor/autoload.php";


use Twilio\Twiml;


        $response = new Twiml();
       
        $dial = $response->dial();


         $dial->client("subash");

header('Content-Type: text/xml');
echo $response;
