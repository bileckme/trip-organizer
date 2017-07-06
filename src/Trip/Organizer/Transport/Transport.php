<?php namespace Trip\Organizer\Transport;


class Transport extends AbstractTransport
{

    /**
     * Gets the next instruction
     *
     * @param array $boardingCards
     * @return mixed
     */
    public function nextInstruction(array $boardingCards = array())
    {
        return sprintf('Baggage will we automatically transferred from your last leg.' . "\n");
    }


    /**
     * @return string
     */
    public function getInstruction()
    {
        return parent::getInstruction();
    }
}