FORTYTWO - PHP SDK - ADVANCED MESSAGING PLATFORM
================================================

**This SDK is currently in RELEASE CANDIDATE**

This SDK will help you to use the [Advanced Messaging Platform](https://www.fortytwo.com/solutions/amp/) service from [Fortytwo Telecom](https://www.fortytwo.com)

## How to install it:

### With composer:
Using [composer](https://getcomposer.org/):
```
    composer require fortytwo/php-sdk-advanced-messaging-platform:1.0.0-RC3
```

### Directly:

You can download the library from the [Fortytwo Telecom website](https://www.fortytwo.com/developers/) or on our [official Github repository](https://github.com/42Telecom/php-sdk-advanced-messaging-platform).

## Testing:

Execute the following command on the project directory:
```
vendor/bin/phpunit -c tests/Phpunit.xml
```
Currently the  code coverage is 100%.

## How to use it:

### Introduction

The SDK is a Wrapper for the [IM API](https://www.fortytwo.com/apis/im-gateway-rest-api/). Each table in the documentation is an Entity in the SDK.
For example, the table `DESTINATION_INFO` is represented by the class `DestinationEntity`.

In each class, the key can be accessed by the corresponding setter and getter.

For example:

* to set the destination number: `$destination->setNumber(123456)`
* to get the destination number: `$destination->getNumber(123456)`

As we are following the PSR-2 coding standard - the variable, function and methods name are all camelCase.
Each key from the API is converted in camelCase. So for example `expiry_text` from the API is converted in `expiryText` in the SDK.

### Using the SDK

We will try to send an SMS to a specific number.

#### Step 1 - Set dependencies

You must first define your dependencies. The `AdvancedMessagingPlatform` is mandatory.
Following the API documentation, we must call the entities we need for sending an SMS:

* DestinationEntity: To create the destination (phone number)
* SMSContentEntity: To create the content of the SMS
* RequestBodyEntity: To Glue Destination and SMSContent together and complete the body request.

```php
<?php
// Add dependencies
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;
```

#### Step 2 - Bootstrap the SDK

We will now bootstrap the SDK. Please note that the SDK uses the Composer autoloader.

Firstly, load the Composer autoloader:
```php
<?php
// Add dependencies
use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;

// Bootstrap the SDK - Load the autoloader
require dirname(__FILE__) . '/../vendor/autoload.php';
```
Secondly (after loading the autoloader), we add a small workaround to load the dependencies for the Serializer:
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
$root = realpath(dirname(dirname(__FILE__)));
Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/vendor/jms/serializer/src"
);
```
The application will correctly load all of the dependencies. We can now work on the main task: of sending a message.

#### Step 3 - Prepare the message

Firstly, we need to create a new destination where we will send the message:
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
$root = realpath(dirname(dirname(__FILE__)));
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
```

We then create the content of the message:
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
$root = realpath(dirname(dirname(__FILE__)));
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
```

We add the destination and the content in the body:
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
$root = realpath(dirname(dirname(__FILE__)));
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
```

#### Step 4 - Send the message

The message is now ready to send. We first instantiate the class using the Forytwo token, and then call the sendMessage function.
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
$root = realpath(dirname(dirname(__FILE__)));
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
$messaging = new AdvancedMessagingPlatform('mytoken');
$response = $messaging->sendMessage($request);
```

The response is stored in the `$response` variable, so you can process the result as you want.

That's it.

The entire SDK act in the same coherent and predictable way across the board. You can play with different properties from the API and send SMS, IM, or SMS & IM.
