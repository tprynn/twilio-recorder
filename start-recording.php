<?php
require_once 'vendor/autoload.php';
use Twilio\Twiml;
use Twilio\Rest\Client;

require_once 'twilio-keys.php';

$twilio_number = '+14804186393';

$from = $_REQUEST['From'];

header("Content-Type: text/xml");
$response = new Twiml;

if (!preg_match("/^(\+1)?6026530114$/", $from)) {
	$response->message("STOP");
} else {
	$client = new Client($account_sid, $auth_token);

	$call = $client->account->calls->create(  
    	$from,
    	$twilio_number,
    	array(
            "record" => True,
            "url" => "https://www.tannerprynn.com/twilio/listen.xml"
        )
    );
	// $response->message("you sent: " . $_REQUEST['Body']);
}

echo $response;
?>
