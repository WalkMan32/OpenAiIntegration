<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace OpenAiIntegration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *параметры метода GetPromptById
 *
 * Generated from protobuf message <code>openAiIntegration.GetPromptByIdParams</code>
 */
class GetPromptByIdParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Id = 1;</code>
     */
    protected $Id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->Id = $var;

        return $this;
    }

}

