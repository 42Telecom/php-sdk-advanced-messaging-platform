<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform;

use Fortytwo\SDK\Core\Core;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\RequestBodyEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseBodyEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\CallbackMessageStatusEntity;
use JMS\Serializer\SerializerBuilder;

/**
 * AdvancedMessagingPlatform Main class for the library.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class AdvancedMessagingPlatform extends Core
{
    /**
     * Send a message using the API
     *
     * @api
     * @param RequestBodyEntity $request Request object.
     * @return ResponseBodyEntity Response object.
     */
    public function sendMessage(RequestBodyEntity $request)
    {
        $response = $this->request('IM/Send', array(), $request);

        $serializer = SerializerBuilder::create()->build();
        $result = $serializer->deserialize(
            $response,
            'Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseBodyEntity',
            'json'
        );

        return $result;
    }

    /**
     * Request the status of a message using the API
     *
     * @api
     * @param string $messageId The message ID.
     * @return CallbackMessageStatusEntity Response object.
     */
    public function getStatus($messageId)
    {
        $response = $this->request('IM/Status', array($messageId), array());

        $serializer = SerializerBuilder::create()->build();
        $result = $serializer->deserialize(
            $response,
            'Fortytwo\SDK\AdvancedMessagingPlatform\Entities\CallbackMessageStatusEntity',
            'json'
        );

        return $result;
    }
}
