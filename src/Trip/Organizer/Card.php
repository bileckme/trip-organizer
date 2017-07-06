<?php namespace Trip\Organizer;

use Countable;
use Iterator;

/**
 * Class Card
 * @package Trip\Organizer
 */
abstract class Card
{
    protected $departure;

    /**
     * @var
     */
    protected $destination;

    /**
     * Card constructor.
     * @param $departure
     * @param $destination
     */
    public function __construct($departure, $destination)
    {
        $this->departure = $departure;
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }
}