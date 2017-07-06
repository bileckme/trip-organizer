<?php namespace Trip\Organizer\Transport;

/**
 * Class AbstractTransport
 * @package Transport
 */
abstract class AbstractTransport implements TransportInterface
{
    protected $transportNo;

    /**
     * @var string
     */
    protected $departure;

    /**
     * @var string
     */
    protected $destination;

    const FINAL_INSTRUCTION = 'You have arrived at your final destination.';

    /**
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param string $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getTransportNo()
    {
        return $this->transportNo;
    }

    /**
     * @param mixed $transportNo
     */
    public function setTransportNo($transportNo)
    {
        $this->transportNo = $transportNo;
    }

    /**
     * Gets the next instruction
     *
     * @param array $boardingCards
     * @return mixed
     */
    public function nextInstruction(array $boardingCards)
    {
        foreach($boardingCards as $index => $cards)
        {
            if ($boardingCards[$index]->getInstruction() == parent::FINAL_INSTRUCTION){
                break;
            } else {
                return $boardingCards[$index]->getInstruction();
            }
        }

    }

    /**
     * @return string
     */
    public function getInstruction()
    {
        return $this->getLastInstruction();
    }

    public function getLastInstruction()
    {
        return self::FINAL_INSTRUCTION;
    }

    public function display()
    {
        echo $this->getInstruction();
    }
}