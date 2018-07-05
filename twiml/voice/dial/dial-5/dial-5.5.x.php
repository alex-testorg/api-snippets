<?php
require_once './vendor/autoload.php';
use Twilio\TwiML;

$response = new TwiML();
$dial = $response->dial(['record' => 'record-from-ringing-dual',
    'recordingStatusCallback' => 'www.myexample.com']);
$dial->number('+15558675310');

echo $response;
