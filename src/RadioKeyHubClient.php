<?php

declare(strict_types=1);

namespace RadioKey\HubClient;

use RadioKey\HubClient\Command\CommandInterface;
use RadioKey\HubClient\Mqtt\MqttCommandPublisherInterface;

class RadioKeyHubClient
{
    /**
     * @var MqttCommandPublisherInterface
     */
    private $mqttMessagePublisher;

    /**
     * @param MqttCommandPublisherInterface $mqttMessagePublisher
     */
    public function __construct(MqttCommandPublisherInterface $mqttMessagePublisher)
    {
        $this->mqttMessagePublisher = $mqttMessagePublisher;
    }

    public function publishCommand(string $hubAddress, CommandInterface $command): void
    {
        $this->mqttMessagePublisher->publish(
            $hubAddress,
            \json_encode($command, \JSON_THROW_ON_ERROR)
        );
    }
}