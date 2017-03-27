<?php
/**
 * This Example sends an SMS Message
 * NOTE: If you want to test you have to replace <INSERT_TOKEN_HERE> with a valid token and <PHONE_NUMBER> with a mobile phone number including prefix (e.g 356880000001) .
 */
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;

// Using the Composer autoload
require dirname(__FILE__) . '/../vendor/autoload.php';

// Declaring some dependencies for the Serializer
$root = dirname(__FILE__);
Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/../vendor/jms/serializer/src"
);

// To change with a correct token and phone number.
const TOKEN = '<INSERT_TOKEN_HERE>';
const NUMBER = '<PHONE_NUMBER>';

try {
    $messaging = new AdvancedMessagingPlatform(TOKEN);

    //Set destination
    $destination = new DestinationEntity();
    $destination->setNumber(NUMBER);

    //SMS Content
    $SMS = new SMSContentEntity();

    $SMS
        ->setMessage('This is a test SMS message from Fortytwo.')
        ->setSenderId('Fortytwo');

    $request = new RequestBodyEntity();

    $request
        ->addDestination($destination)
        ->setSmsContent($SMS);

    $response = $messaging->sendMessage($request);

    echo $response->getResultInfo()->getDescription() ."\n";

} catch (\Exception $e) {
    echo $e->getMessage();
}
