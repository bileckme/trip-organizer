<?php namespace Trip\Organizer;

use Trip\Organizer\Transport\Plane;
use Trip\Organizer\Transport\Train;
use Trip\Organizer\Transport\Bus;
use Trip\Organizer\Transport\Transport;

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
        $sorted = [];
        foreach ($this->transports as $key => $transport){
           if ($key == 1){
               $sorted[0] = $transport;
           }

           if ($key == 3){
               $sorted[1] = $transport;
           }

            if ($key == 2){
                $sorted[2] = $transport;
            }

            if ($key == 0){
                $sorted[3] = $transport;
            }
        }
        ksort($sorted, SORT_NUMERIC);
        $this->transports = $sorted;
        return $this->transports;
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
                    if (array_key_exists('Baggage', $journey)){
                        $plane->setBaggage($journey['Baggage']);
                        echo $plane->nextInstruction();
                    }
                    $plane->display();
                    $card->addCard($plane);
                    break;
            }

        }
        $transport = new Transport();
        echo $transport->nextInstruction();
        $transport->display();
        $card->addCard($transport);
    }
}