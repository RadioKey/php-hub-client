<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Mqtt;

interface MqttCommandPublisherInterface
{
    public function publish(string $hubAddress, string $command): void;
}