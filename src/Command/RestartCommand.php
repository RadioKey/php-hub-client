<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Command;

class RestartCommand implements CommandInterface
{
    public function getName(): string
    {
        return 'restart';
    }

    public function jsonSerialize()
    {
        return [
            'command' => $this->getName(),
        ];
    }
}