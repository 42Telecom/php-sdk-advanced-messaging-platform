<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform;

use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\CallbackMessageStatusEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\CallbackMessageStatusInfoEntity;

class CallbackMessageStatusEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiateClass()
    {
        // Assert
        $this->assertInstanceOf('Fortytwo\SDK\AdvancedMessagingPlatform\Entities\CallbackMessageStatusEntity', new CallbackMessageStatusEntity());
    }

    public function testMessageId()
    {
        $callback = new CallbackMessageStatusEntity();

        $data = new CallbackMessageStatusInfoEntity();

        $data
            ->setType('SMS')
            ->setMessageId('123456')
            ->setStatus('ACCEPTED')
            ->setTimestamp('123456789')
            ->setMicroTimestamp('1234567890')
            ->setTo('35611111111')
            ->setFrom('35622222222')
            ->setClientMessageId('564654654')
            ->setErrorCode('500')
        ;

        $callback
            ->setClientJobId('98563313')
            ->setApiJobId('68532868')
            ->setData($data)
        ;

        $this->assertEquals(
            "68532868",
            $callback->getApiJobId()
        );

        $this->assertEquals(
            "98563313",
            $callback->getClientJobId()
        );

        $this->assertEquals(
            "SMS",
            $callback->getData()[0]->getType()
        );

        $this->assertEquals(
            "123456",
            $callback->getData()[0]->getMessageId()
        );

        $this->assertEquals(
            "ACCEPTED",
            $callback->getData()[0]->getStatus()
        );

        $this->assertEquals(
            "123456789",
            $callback->getData()[0]->getTimestamp()
        );

        $this->assertEquals(
            "1234567890",
            $callback->getData()[0]->getMicroTimestamp()
        );

        $this->assertEquals(
            "35611111111",
            $callback->getData()[0]->getTo()
        );

        $this->assertEquals(
            "35622222222",
            $callback->getData()[0]->getFrom()
        );

        $this->assertEquals(
            "564654654",
            $callback->getData()[0]->getClientMessageId()
        );

        $this->assertEquals(
            "500",
            $callback->getData()[0]->getErrorCode()
        );
    }
}
