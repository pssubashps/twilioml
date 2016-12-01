<?php
include "vendor/autoload.php";


use Twilio\Twiml;

$response = new Twiml;
 $dial = $response->dial(array('callerId' => '+919496842554'));
$dial = $response->dial();
$dial->client('+919901057647');


header('Content-Type: text/xml');
echo $response;