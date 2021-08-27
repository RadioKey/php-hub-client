<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Command;

interface CommandInterface extends \JsonSerializable
{
    public function getName(): string;
}