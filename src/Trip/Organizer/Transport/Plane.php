<?php namespace Trip\Organizer\Transport;

/**
 * Class Plane
 * @package Trip\Organizer\Transport
 */
class Plane extends AbstractTransport
{
    protected $gate;
    protected $seat;

    const INSTRUCTION = 'From %s, take flight %s to %s. Gate %s, seat %s';

    /**
     * @return mixed
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * @param mixed $gate
     */
    public function setGate($gate)
    {
        $this->gate = $gate;
    }

    /**
     * @return mixed
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param mixed $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    /**
     * Gets instruction
     *
     * @param string $message
     */
    public function getInstruction()
    {
        return sprintf(self::INSTRUCTION . "\n", $this->getDeparture(), $this->getTransportNo(),  $this->getDestination(), $this->getGate(), $this->getSeat());
    }
}