<?php
require_once 'vendor/autoload.php';
use Twilio\Twiml;
use Twilio\Rest\Client;

$account_sid = 'AC7d117c7d90a198a18ff5f1c28bc16dc7';
$auth_token = '5da1203669803c005b0e70c16c131c08';

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
