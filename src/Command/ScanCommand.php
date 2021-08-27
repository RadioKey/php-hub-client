<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Command;

class ScanCommand implements CommandInterface
{
    /**
     * @var int
     */
    private $repeats;

    /**
     * @var int
     */
    private $delayMs;

    /**
     * @param int $repeats
     * @param int $delayMs
     */
    public function __construct(int $repeats, int $delayMs)
    {
        $this->repeats = $repeats;
        $this->delayMs = $delayMs;
    }

    public function getName(): string
    {
        return 'scan';
    }

    /**
     * @return int
     */
    public function getRepeats(): int
    {
        return $this->repeats;
    }

    /**
     * @return int
     */
    public function getDelayMs(): int
    {
        return $this->delayMs;
    }

    public function jsonSerialize()
    {
        return [
            'command' => $this->getName(),
            'repeats' => $this->repeats,
            'delayMs' => $this->delayMs,
        ];
    }

}