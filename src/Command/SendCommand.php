<?php

declare(strict_types=1);

namespace RadioKey\HubClient\Command;

class SendCommand implements CommandInterface
{
    /**
     * @link https://github.com/sui77/rc-switch/blob/master/RCSwitch.cpp
     * @link https://github.com/RadioKey/Firmware_Hub_ESP8266-01/blob/master/src/main.cpp
     *
     * @var int
     */
    private $protocol;

    /**
     * @var int
     */
    private $repeats;

    /**
     * @var int
     */
    private $pulseLength;

    /**
     * @var int
     */
    private $code;

    /**
     * @var int
     */
    private $bitLength;

    /**
     * @param int $protocol
     * @param int $repeats
     * @param int $pulseLength
     * @param int $code
     * @param int $bitLength
     */
    public function __construct(int $protocol, int $repeats, int $pulseLength, int $code, int $bitLength)
    {
        $this->protocol = $protocol;
        $this->repeats = $repeats;
        $this->pulseLength = $pulseLength;
        $this->code = $code;
        $this->bitLength = $bitLength;
    }

    public function getName(): string
    {
        return 'send';
    }

    /**
     * @return int
     */
    public function getProtocol(): int
    {
        return $this->protocol;
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
    public function getPulseLength(): int
    {
        return $this->pulseLength;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getBitLength(): int
    {
        return $this->bitLength;
    }

    public function jsonSerialize()
    {
        return [
            'command' => $this->getName(),
            'protocol' => $this->getProtocol(),
            'repeats' => $this->getRepeats(),
            'pulseLength' => $this->getPulseLength(),
            'code' => $this->getCode(),
            'bitLength' => $this->getBitLength(),
        ];
    }
}