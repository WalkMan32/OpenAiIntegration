<?php
// GENERATED CODE -- DO NOT EDIT!

namespace OpenAiIntegration;

/**
 */
class OpenAiIntegrationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \OpenAiIntegration\SendMessageParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMessage(\OpenAiIntegration\SendMessageParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/SendMessage',
        $argument,
        ['\Google\Protobuf\StringValue', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \OpenAiIntegration\GetModelsParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModels(\OpenAiIntegration\GetModelsParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/GetModels',
        $argument,
        ['\OpenAiIntegration\GetModelsResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \OpenAiIntegration\Prompt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrUpdatePrompt(\OpenAiIntegration\Prompt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/AddOrUpdatePrompt',
        $argument,
        ['\OpenAiIntegration\Prompt', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \OpenAiIntegration\GetPromptListParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPromptList(\OpenAiIntegration\GetPromptListParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/GetPromptList',
        $argument,
        ['\OpenAiIntegration\GetPromptListResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \OpenAiIntegration\GetPromptByIdParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPromptById(\OpenAiIntegration\GetPromptByIdParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/GetPromptById',
        $argument,
        ['\OpenAiIntegration\Prompt', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \OpenAiIntegration\GetMessagesParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMessages(\OpenAiIntegration\GetMessagesParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/GetMessages',
        $argument,
        ['\OpenAiIntegration\GetMessagesResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\UInt32Value $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePrompt(\Google\Protobuf\UInt32Value $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openAiIntegration.OpenAiIntegrationService/DeletePrompt',
        $argument,
        ['\Google\Protobuf\BoolValue', 'decode'],
        $metadata, $options);
    }

}
