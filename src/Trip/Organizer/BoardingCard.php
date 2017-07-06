<?php namespace Trip\Organizer;

use Countable;
use Iterator;

/**
 * Class BoardingCard
 * @package Trip\Organizer
 */
class BoardingCard extends Card implements Countable, Iterator
{
    /**
     * @var Card[]
     */
    private $cards = [];

    /**
     * @var int
     */
    private $currentIndex;

    /**
     * BoardingCard constructor.
     * @param Card|null $card
     * @internal param $departure
     * @internal param $destination
     */
    public function __construct(Transport $card = null)
    {
        if (!is_null($card)){
            $this->addCard($card);
        }
    }

    /**
     * @param Card $card
     */
    public function addCard(Transport $card){
        $this->cards[] = $card;
    }

    /**
     * Remove the card
     * @param Card $removeCard
     */
    public function removeCard(Transport $removeCard)
    {
        foreach ($this->cards as $key => $card) {
            if ($card->getDeparture() === $removeCard->getDeparture() &&
              $card->getDestination() === $removeCard->getDestination()) {
                unset($this->cards[$key]);
            }
        }

        $this->cards = array_values($this->cards);
    }

    /**
     * Return the current element
     *
     * @return mixed Can return any type.
     */

    public function current()
    {
        return $this->cards[$this->currentIndex];
    }

    /**
     * Move forward to next element
     *
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * Return the key of the current element
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->currentIndex;
    }

    /**
     * Checks if current position is valid
     *
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return isset($this->cards[$this->currentIndex]);
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * Count elements of an object
     *
     * @return int The custom count as an integer.
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->cards);
    }


}