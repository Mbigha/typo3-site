<?php
namespace HofBootCamp\HofBootcamp\Domain\Model;


/***
 *
 * This file is part of the "Hof Typo3 Bootcamp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Location of a session of the event.
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * room
     * 
     * @var string
     */
    protected $room = '';

    /**
     * maxParticipants
     * 
     * @var int
     */
    protected $maxParticipants = 0;

    /**
     * Returns the room
     * 
     * @return string $room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets the room
     * 
     * @param string $room
     * @return void
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }

    /**
     * Returns the maxParticipants
     * 
     * @return int $maxParticipants
     */
    public function getMaxParticipants()
    {
        return $this->maxParticipants;
    }

    /**
     * Sets the maxParticipants
     * 
     * @param int $maxParticipants
     * @return void
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->maxParticipants = $maxParticipants;
    }
}
