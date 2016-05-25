FORTYTWO - PHP SDK - ADVANCED MESSAGING PLATFORM
================================================
This PHP SDK allows you to send messages via SMS or Instant Messages (e.g VIBER) through the [Advanced Messaging Platform (AMP)](https://www.fortytwo.com/solutions/amp/) service from [Fortytwo Telecom](https://www.fortytwo.com)

AMP allows you to send an Instant Message with text, buttons and/or images to end users as well as SMS. The system can be configured in a way that if the end user is not reachable via Instant Messaging, an SMS is sent as a fallback thus ensuring that the end-user is reached.

## Create an Account

In order to use the Advanced Messaging Platform, a token is required to autenticate with Fortytwo. This token can be created by [Registering Here] (https://www.fortytwo.com/register/)

Once registered, in the control panel please go to "IM" > "Tokens" and Add a New Token. The token generated above will be used in the code

## Setup

### With Composer:
Install [Composer](https://getcomposer.org/):
``` bash
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

Please be sure to have Composer installed as prerequisite.
```bash
    composer require fortytwo/php-sdk-advanced-messaging-platform:1.0.0-RC3
```


## Testing:

Execute the following command on the project directory:
```bash
vendor/bin/phpunit -c tests/Phpunit.xml
```
Currently the  code coverage is 100%.

## Examples:

For a full list of examples, go to the **examples** folder
- [Send an SMS](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendSMSMessage.php)
- [Send an Instant Message](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendInstantMessage.php)
- [Send IM Message with multiple destinations](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendMultipleMessage.php)
- [Send Instant Message with SMS fallback.](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendInstantMessageWithSMSFallback.php)

#### Simple Example

```php
<?php
// Add dependencies
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;

// Bootstrap the SDK - Load the autoloader
require dirname(__FILE__) . '/../vendor/autoload.php';

// Bootstrap the SDK - Set serializer dependencies
$root = realpath(dirname(__FILE__)));
Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/vendor/jms/serializer/src"
);

// Prepare message : Creating a destination
$destination = new DestinationEntity();
$destination
    ->setNumber(356123458)
    ->setCustomId('123456789')
;

// Prepare message : Creating the message content
$SMS = new SMSContentEntity();
$SMS
    ->setMessage('Hello! This is a message!')
    ->setSenderId('blabla')
    ->setTtl(3600)
;

// Prepare message : Preparing the main request
$request = new RequestBodyEntity();
$request
    ->addDestinations($destination)
    ->setSmsContent($SMS);

// Send the message.
$messaging = new AdvancedMessagingPlatform('<INSERT_TOKEN_HERE>');
$response = $messaging->sendMessage($request);

echo 'Response code '$response->getResultInfo()->getStatusCode() . ': ' . $response->getResultInfo()->getDescription()
```
