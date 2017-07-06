<?php namespace Trip\Organizer\Transport;

/**
 * Class Bus
 * @package Orgainer
 */
class Bus extends Transport
{
    const INSTRUCTION = 'Take the airport bus from %s to %s';


    /**
     * Gets instruction
     *
     * @param string $message
     */
    public function getInstruction()
    {
        return sprintf(self::INSTRUCTION . "\n", $this->getDeparture(), $this->getDestination());
    }
}