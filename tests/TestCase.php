<?php

use Trip\Organizer\Transport\Bus;
use Trip\Organizer\Transport\Train;
use Trip\Organizer\Transport\Plane;
use Trip\Organizer\Transport\Transport;
use Trip\Organizer\Trip;
use Trip\Organizer\Cards;

class TestCase extends PHPUnit_Framework_TestCase
{
    protected $trip;
    protected $cards;

    public function setUp()
    {
        $this->cards = new Cards();
        $this->trip = new Trip($this->cards->boardingCollection);
    }

    public function testRun()
    {
        echo "\n";
        $this->trip->sort();
        foreach($this->trip->transports as $journey){
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

    public function tearDown()
    {
        unset($this->cards);
        unset($this->trip);
    }
}