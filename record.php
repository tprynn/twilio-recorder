<?php
require_once 'vendor/autoload.php';

use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse();
$response->record(['timeout' => 0, 'finishOnKey' => '', 'playBeep' => 'false']);

header("Content-Type: text/xml");
echo $response;

?>
