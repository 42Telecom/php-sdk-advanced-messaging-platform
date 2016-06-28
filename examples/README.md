Examples
=========

## How to run the examples:

### Clone the project from github.

For testing the example you can clone the project from github:
```
    git clone https://github.com/42Telecom/php-sdk-advanced-messaging-platform.git
```

### Install composer.

If you don't have composer you can install it following the documentation: [Composer](https://getcomposer.org/doc/00-intro.md).

### Install dependencies with composer.

From the root directory of the project you can install the dependencies:
```
    composer install
```

### Update the example files.

You can now update the examples files changing the "TOKEN" constant with a valid token and the "NUMBER" constant with a valid phone number.


### Execute the examples.

You can excute the example from the example directory directly with php:

```
    php sendInstantMessage.php
```

## Examples:

For a full list of examples, go to the **examples** folder
- [Send an SMS](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendSMSMessage.php)
- [Send an Instant Message](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendInstantMessage.php)
- [Send IM Message with multiple destinations](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendMultipleMessage.php)
- [Send Instant Message with SMS fallback.](https://github.com/42Telecom/php-sdk-advanced-messaging-platform/blob/master/examples/sendInstantMessageWithSMSFallback.php)
