<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Command;

class ReconfigureCommand implements CommandInterface
{
    public function getName(): string
    {
        return 'reconfigure';
    }

    public function jsonSerialize()
    {
        return [
            'command' => $this->getName(),
        ];
    }
}