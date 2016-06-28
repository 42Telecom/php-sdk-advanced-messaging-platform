<?php
/**
 * This Example send a SMS Message to FortyTwo 2FA API with params.
 * NOTE: If you want to test you have to replace <INSERT_TOKEN_HERE> with a valid token.
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
const NUMBER = '<PHONENUMBERHERE>';

try {
    $messaging = new AdvancedMessagingPlatform(TOKEN);

    //Set destination
    $destination = new DestinationEntity();
    $destination
        ->setNumber(NUMBER)
        ->setCustomId('123456789')
        ->setParams(array('NAME' => 'sebastien', 'ID' => '255'))
    ;

    // Prepeare SMS Content
    $SMS = new SMSContentEntity();

    $SMS
        ->setMessage('Hello {#NAME} your ID is {#ID}.')
        ->setSenderId('Fortytwo')
        ->setTtl(3600)
    ;

    $request = new RequestBodyEntity();

    $request
        ->addDestination($destination)
        ->setSmsContent($SMS);

    $response = $messaging->sendMessage($request);

    echo $response->getResultInfo()->getDescription() ."\n";

} catch (\Exception $e) {
    echo $e->getMessage();
}
