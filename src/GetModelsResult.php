<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace OpenAiIntegration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *результат для метода GetModels
 *
 * Generated from protobuf message <code>openAiIntegration.GetModelsResult</code>
 */
class GetModelsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.Model ModelList = 1;</code>
     */
    private $ModelList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\OpenAiIntegration\Model>|\Google\Protobuf\Internal\RepeatedField $ModelList
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.Model ModelList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelList()
    {
        return $this->ModelList;
    }

    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.Model ModelList = 1;</code>
     * @param array<\OpenAiIntegration\Model>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OpenAiIntegration\Model::class);
        $this->ModelList = $arr;

        return $this;
    }

}

