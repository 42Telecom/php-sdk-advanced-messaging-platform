<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform;

use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseBodyEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseResultInfoEntity;

class ResponseBodyEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiateClass()
    {
        // Assert
        $this->assertInstanceOf(
            'Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseBodyEntity',
            new ResponseBodyEntity()
        );

        $this->assertInstanceOf(
            'Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseResultInfoEntity',
            new ResponseResultInfoEntity()
        );
    }

    public function testEntities()
    {
        $responseInfo = new ResponseResultInfoEntity();

        $info = $responseInfo
            ->setStatusCode('500')
            ->setDescription('Some error message.')
        ;

        $response = new ResponseBodyEntity();

        $response
            ->setApiJobId('123456')
            ->setResults('results')
            ->setClientApiJobId('789456123')
            ->setResultInfo($info)
        ;

        $this->assertEquals(
            "123456",
            $response->getApiJobId()
        );

        $this->assertEquals(
            "results",
            $response->getResults()
        );

        $this->assertEquals(
            "789456123",
            $response->getClientJobId()
        );

        $this->assertEquals(
            "500",
            $response->getResultInfo()->getStatusCode()
        );

        $this->assertEquals(
            "Some error message.",
            $response->getResultInfo()->getDescription()
        );
    }
}
