<?php namespace Trip\Organizer;


class Trip
{
    public $transports = [];

    /**
     * Trip constructor.
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
        foreach($this->transports as $journey){
            switch ($journey['Transport']){
                case 'Bus':
                    $bus = new Bus();
                    $bus->setDeparture($journey['Departure']);
                    $bus->setDestination($journey['Destination']);
                    $bus->display();
                    break;
                case 'Train':
                    $train = new Train();
                    $train->setTransportNo($journey['TransportNo']);
                    $train->setSeat($journey['Seat']);
                    $train->setDeparture($journey['Departure']);
                    $train->setDestination($journey['Destination']);
                    $train->display();
                    break;
                case 'Plane':
                    $plane = new Plane();
                    $plane->setTransportNo($journey['TransportNo']);
                    $plane->setGate($journey['Gate']);
                    $plane->setSeat($journey['Seat']);
                    $plane->setDeparture($journey['Departure']);
                    $plane->setDestination($journey['Destination']);
                    $plane->display();
                    break;
            }

        }
        $transport = new Transport();
        $transport->display();
    }
}