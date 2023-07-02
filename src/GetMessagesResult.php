<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace OpenAiIntegration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>openAiIntegration.GetMessagesResult</code>
 */
class GetMessagesResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.Message messages = 1;</code>
     */
    private $messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\OpenAiIntegration\Message>|\Google\Protobuf\Internal\RepeatedField $messages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.Message messages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.Message messages = 1;</code>
     * @param array<\OpenAiIntegration\Message>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OpenAiIntegration\Message::class);
        $this->messages = $arr;

        return $this;
    }

}

