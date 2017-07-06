<?php

use Trip\Organizer\Trip;
use Trip\Organizer\Cards;

require_once __DIR__.'/../vendor/autoload.php';

$cards = new Cards();

$trip = new Trip($cards->boardingCollection);

$trip->sort();

$trip->display();