<?php

declare(strict_types=1);

namespace RadioKey\HubClient;

use PHPUnit\Framework\TestCase;
use RadioKey\HubClient\Command\RestartCommand;
use RadioKey\HubClient\Mqtt\Adapter\BluerhinosMqttCommandPublisher;

class RadioKeyHubClientTest extends TestCase
{
    public function testPublishCommand()
    {
        $client = new RadioKeyHubClient(
            new BluerhinosMqttCommandPublisher(
                '127.0.0.1',
                9999,
                'someTestClient',
                'username',
                'password'
            )
        );

        $client->publishCommand(
            'AA:BB:CC:DD:EE:FF',
            new RestartCommand()
        );
    }
}