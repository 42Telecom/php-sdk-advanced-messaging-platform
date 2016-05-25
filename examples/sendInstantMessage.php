<?php
/**
 * This Example send an IM Message.
 * NOTE: If you want to test you have to replace <INSERT_TOKEN_HERE> with a valid token.
 */

// You have to include the dependencies
// The main class for the SDK
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
// The class who represent the model of the API
// The Destination class
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
// The IM Content class
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\IMContentEntity;
// Request Body class
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;

// Using the Composer autoload
require dirname(__FILE__) . '/../vendor/autoload.php';

// Declaring some dependencies for the Serializer
$root = dirname(__FILE__);
Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/../vendor/jms/serializer/src"
);


// Here the code to create and send the message.
try {
    $messaging = new AdvancedMessagingPlatform('<INSERT_TOKEN_HERE>');

    //Create a destination
    $destination = new DestinationEntity();
    $destination
        ->setNumber(356123456)
        ->setCustomId('123456789')
    ;

    // Prepare the IM content
    $IM = new IMContentEntity();

    $IM
        ->setChannel('VIBER')
        ->setContent('This is a test IM message from Fortytwo.')
    ;

    // Prepare the Request Body
    $request = new RequestBodyEntity();
    $request
        ->addDestination($destination)
        ->setImContent($IM)
        ->setCallbackUrl('https://example.com/im/callback-sales')
        ->setJobId('abc123456')
    ;

    // Send the IM message
    $response = $messaging->sendMessage($request);

    // Print the response.
    echo $response->getResultInfo()->getDescription() ."\n";

} catch (\Exception $e) {
    echo $e->getMessage();
}