FORTYTWO - PHP SDK - ADVANCED MESSAGING PLATFORM
================================================
This PHP SDK allows you to send messages via SMS or Instant Messages (e.g VIBER) through the [Advanced Messaging Platform (AMP)](https://www.fortytwo.com/solutions/amp/) service from [Fortytwo Telecom](https://www.fortytwo.com)

AMP allows you to send an Instant Message with text, buttons and/or images to end users as well as SMS. The system can be configured in a way that if the end user is not reachable via Instant Messaging, an SMS is sent as a fallback thus ensuring that the end-user is reached.

## Create an Account

In order to use the Advanced Messaging Platform, a token is required to autenticate with Fortytwo. This token can be created by [Registering Here] (https://www.fortytwo.com/register/)

Once registered, in the control panel please go to "IM" > "Tokens" and Add a New Token. The token generated above will be used in the code

## Setup
Install [Composer](https://getcomposer.org/doc/00-intro.md).

In the root path of your project you have to add the SDK as dependency:
```bash
    composer require fortytwo/php-sdk-advanced-messaging-platform
    composer install
```

## Examples:
```php
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


```


For a full list of examples, go to the **[examples](examples/README.md)** folder.
