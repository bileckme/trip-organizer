<?php namespace Trip\Organizer;

use Trip\Organizer\Transport\Transport;

/**
 * Class Card
 * @package Trip\Organizer
 */
abstract class Card
{
    /**
     * @var Transport
     */
    protected $transport;

    /**
     * Card constructor.
     * @param $departure
     * @param $destination
     */
    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->transport->setDeparture();
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->transport->getDestination();
    }
}