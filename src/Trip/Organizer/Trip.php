<?php namespace Trip\Organizer;


/**
 * Class Trip
 * @package Trip\Organizer
 */
class Trip
{
    public $transports = [];

    /**
     * Trip constructor.
     * @param array $collection
     */
    public function __construct(array $collection)
    {
        $this->transports = $collection;
    }

    /**
     * Sorts the trip
     */
    public function sort()
    {
        return ksort($this->transports);
    }

    /**
     * Displays the trip
     */
    public function display()
    {
        $card = new BoardingCard();
        foreach($this->transports as $journey){
            switch ($journey['Transport']){
                case 'Bus':
                    $bus = new Bus();
                    $bus->setDeparture($journey['Departure']);
                    $bus->setDestination($journey['Destination']);
                    $bus->display();
                    $card->addCard($bus);
                    break;
                case 'Train':
                    $train = new Train();
                    $train->setTransportNo($journey['TransportNo']);
                    $train->setSeat($journey['Seat']);
                    $train->setDeparture($journey['Departure']);
                    $train->setDestination($journey['Destination']);
                    $train->display();
                    $card->addCard($train);
                    break;
                case 'Plane':
                    $plane = new Plane();
                    $plane->setTransportNo($journey['TransportNo']);
                    $plane->setGate($journey['Gate']);
                    $plane->setSeat($journey['Seat']);
                    $plane->setDeparture($journey['Departure']);
                    $plane->setDestination($journey['Destination']);
                    $plane->display();
                    $card->addCard($plane);
                    break;
            }

        }
        $transport = new Transport();
        $transport->display();
        $card->addCard($transport);
    }
}