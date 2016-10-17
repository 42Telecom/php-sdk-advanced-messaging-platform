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

In the root path of your project you have to add the SDK as dependency:
```bash
    composer require fortytwo/php-sdk-advanced-messaging-platform:1.0.0-RC8
```


## Testing:

Execute the following command on the project directory:
```bash
vendor/bin/phpunit -c tests/Phpunit.xml
```
Currently the  code coverage is 100%.

## Examples:

For a full list of examples, go to the **[examples](examples/README.md)** folder.
