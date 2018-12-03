<?php
require_once 'vendor/autoload.php';

use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse();
$response->record(['timeout' => 0, 'finishOnKey' => '']);

header("Content-Type: text/xml");
echo $response;

?>
