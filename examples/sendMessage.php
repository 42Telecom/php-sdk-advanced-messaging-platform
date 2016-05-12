<?php
/**
 * This Example send a SMS Message to FortyTwo 2FA API and request a message status.
 */
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;

$root = realpath(dirname(dirname(__FILE__)));

$library = $root . "/src";

$path = array($library, get_include_path());
set_include_path(implode(PATH_SEPARATOR, $path));

// Using the Composer autoload
require dirname(__FILE__) . '/../vendor/autoload.php';

// Declaring some dependencies for the Serializer
Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/vendor/jms/serializer/src"
);

try {
    $messaging = new AdvancedMessagingPlatform('mytoken');

    //Set destination
    $destination = new DestinationEntity();
    $destination
        ->setNumber(35699982808)
        ->setCustomId('123456789')
    ;

    // Prepeare SMS Content
    $SMS = new SMSContentEntity();

    $SMS
        ->setMessage('Hello! This is a test.')
        ->setSenderId('blabla')
        ->setTtl(3600)
    ;

    $request = new RequestBodyEntity();

    $request
        ->addDestinations($destination)
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
