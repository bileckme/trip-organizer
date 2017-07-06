<?php namespace Trip\Organizer\Transport;

/**
 * Class TransportInterface
 * @package Transport
 */
interface TransportInterface
{

    /**
     * Gets the next instruction
     *
     * @param array $boardingCards
     * @return mixed
     */
    public function nextInstruction(array $boardingCards);

    /**
     * Gets instruction
     *
     * @param string $message
     */
    public function getInstruction();
}