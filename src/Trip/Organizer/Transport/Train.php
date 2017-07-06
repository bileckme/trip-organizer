<?php namespace Trip\Organizer\Transport;

/**
 * Class Train
 * @package Trip\Organizer\Transport
 */
class Train extends Transport
{
    /**
     * @var integer
     */
    protected $transportNo;

    /**
     * @var string
     */
    protected $seat;

    const INSTRUCTION = 'Take train %s from %s to %s. Sit in seat %s.';

    /**
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param string $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    public function getInstruction()
    {
        return sprintf(self::INSTRUCTION . "\n", $this->getTransportNo(), $this->getDeparture(), $this->getDestination(), $this->getSeat());
    }

}