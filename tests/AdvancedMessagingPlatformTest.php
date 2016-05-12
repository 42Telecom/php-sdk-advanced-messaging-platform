<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform;

use Fortytwo\SDK\AdvancedMessagingPlatform\AdvancedMessagingPlatform;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

class AdvancedMessagingPlatformTest extends \PHPUnit_Framework_TestCase
{
    public function testSendMessage()
    {
        $mock = new MockHandler([
            new Response(
                201,
                [],
                '{
                   "api_job_id": "763dd180-6fdd-4991-b433-a4f731ee7db1",
                   "client_job_id": "abc123456",
                   "result_info": {
                         "status_code": 200,
                         "description": "Request successful (no errors occured and the message has been submitted)"
                   },
                   "results": {
                         "3561234566": {
                            "message_id": "14474342341620024003",
                            "custom_id": "2"
                         },
                         "3561234567": {
                            "message_id": "14474342341620014003",
                            "custom_id": "1"
                         }
                   }
                }'
            )
        ]);

        $handler = HandlerStack::create($mock);

        $messaging = new AdvancedMessagingPlatform('763dd180-6fdd-4991-b433-a4f731ee7db1', $handler);

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
    }

    public function testStatusMessage()
    {
        $mock = new MockHandler([
            new Response(
                201,
                [],
                '{
                    "api_job_id":"4c2478d3-aebb-4510-8720-1b479d01cfd5",
                    "client_job_id":"abc123456",
                    "data":[
                       {
                          "type":"IM_VIBER",
                          "message_id":"14182390945378443202",
                          "status":"SEEN",
                          "timestamp":1422885283,
                          "micro_timestamp":1422885283477,
                          "to":"35699123457",
                          "from":"CompanyA",
                          "client_message_id":"2",
                          "error_code":0
                       }
                    ]
                }'
            )
        ]);

        $handler = HandlerStack::create($mock);

        $messaging = new AdvancedMessagingPlatform('763dd180-6fdd-4991-b433-a4f731ee7db1', $handler);

        $response = $messaging->getStatus('123456789');
    }
}
