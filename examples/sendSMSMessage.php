<?php
/**
 * This Example send a SMS Message to FortyTwo 2FA API and request a message status.
 * NOTE: If you want to test you have to replace <INSERT_TOKEN_HERE> with a valid token.
 */
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;

// Using the Composer autoload
require dirname(__FILE__) . '/../vendor/autoload.php';

// Declaring some dependencies for the Serializer
$root = realpath(dirname(__FILE__));
Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/vendor/jms/serializer/src"
);

try {
    $messaging = new AdvancedMessagingPlatform('<INSERT_TOKEN_HERE>');

    //Set destination
    $destination = new DestinationEntity();
    $destination
        ->setNumber(356123458)
        ->setCustomId('123456789')
    ;

    // Prepeare SMS Content
    $SMS = new SMSContentEntity();

    $SMS
        ->setMessage('This is a test SMS message from Fortytwo.')
        ->setSenderId('Fortytwo')
        ->setTtl(3600)
    ;

    $request = new RequestBodyEntity();

    $request
        ->addDestination($destination)
        ->setSmsContent($SMS);

    $response = $messaging->sendMessage($request);

    foreach ($response->getResults() as $id => $detail) {
        $status = $messaging->getStatus($detail['message_id']);
    }

    print_r($response->getResultInfo()->getDescription());

    foreach ($status->getData() as $key => $item) {
        print_r($item->getStatus());
    }

} catch (\Exception $e) {
    echo $e->getMessage();
}
