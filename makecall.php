<?php
include "vendor/autoload.php";


use Twilio\Twiml;

$response = new Twiml;
$dial = $response->dial(array('callerId' => 'tommy'));
$dial = $response->dial();
$dial->client('tommy');


header('Content-Type: text/xml');
echo $response;
