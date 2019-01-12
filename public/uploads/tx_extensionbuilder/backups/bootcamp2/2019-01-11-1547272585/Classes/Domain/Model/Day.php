<?php
namespace Bootcamp2\Bootcamp2\Domain\Model;


/***
 *
 * This file is part of the "Bootcamp 2" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Day
 */
class Day extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var \DateTime
     */
    protected $title = null;

    /**
     * dayNumber
     * 
     * @var int
     */
    protected $dayNumber = 0;

    /**
     * timeslots
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\TimeSlot>
     * @cascade remove
     */
    protected $timeslots = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->timeslots = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     * 
     * @return \DateTime $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param \DateTime $title
     * @return void
     */
    public function setTitle(\DateTime $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the dayNumber
     * 
     * @return int $dayNumber
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets the dayNumber
     * 
     * @param int $dayNumber
     * @return void
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;
    }

    /**
     * Adds a TimeSlot
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot $timeslot
     * @return void
     */
    public function addTimeslot(\Bootcamp2\Bootcamp2\Domain\Model\TimeSlot $timeslot)
    {
        $this->timeslots->attach($timeslot);
    }

    /**
     * Removes a TimeSlot
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot $timeslotToRemove The TimeSlot to be removed
     * @return void
     */
    public function removeTimeslot(\Bootcamp2\Bootcamp2\Domain\Model\TimeSlot $timeslotToRemove)
    {
        $this->timeslots->detach($timeslotToRemove);
    }

    /**
     * Returns the timeslots
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\TimeSlot> $timeslots
     */
    public function getTimeslots()
    {
        return $this->timeslots;
    }

    /**
     * Sets the timeslots
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\TimeSlot> $timeslots
     * @return void
     */
    public function setTimeslots(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $timeslots)
    {
        $this->timeslots = $timeslots;
    }
}
