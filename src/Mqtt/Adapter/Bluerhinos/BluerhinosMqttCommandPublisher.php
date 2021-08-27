<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Mqtt\Adapter;

use Bluerhinos\phpMQTT;
use RadioKey\HubClient\Command\CommandInterface;
use RadioKey\HubClient\Mqtt\MqttCommandPublisherInterface;

class BluerhinosMqttCommandPublisher implements MqttCommandPublisherInterface
{
    /**
     * @var phpMQTT
     */
    private $connection;

    /**
     * @var string|null
     */
    private $username;

    /**
     * @var string|null
     */
    private $password;

    public function __construct(
        string $host,
        int $port,
        string $clientId,
        string $username = null,
        string $password = null
    ) {
        $this->connection = new phpMQTT(
            $host,
            $port,
            $clientId
        );

        $this->username = $username;
        $this->password = $password;
    }

    public function publish(string $hubAddress, string $command): void
    {
        $this->connection->connect(true, null, $this->username, $this->password);
        $this->connection->publish($hubAddress, $command);
        $this->connection->disconnect();
    }
}