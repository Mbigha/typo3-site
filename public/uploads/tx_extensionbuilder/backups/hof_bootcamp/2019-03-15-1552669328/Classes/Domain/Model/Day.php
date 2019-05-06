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
 * A day of the event
 */
class Day extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * date
     * 
     * @var \DateTime
     */
    protected $date = null;

    /**
     * dayNumber
     * 
     * @var int
     */
    protected $dayNumber = 0;

    /**
     * A Day can have many time slots, but a time slot can be assigned to a day.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofBootCamp\HofBootcamp\Domain\Model\TimeSlot>
     * @cascade remove
     */
    protected $timesSlots = null;

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
        $this->timesSlots = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
     * @param \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot $timesSlot
     * @return void
     */
    public function addTimesSlot(\HofBootCamp\HofBootcamp\Domain\Model\TimeSlot $timesSlot)
    {
        $this->timesSlots->attach($timesSlot);
    }

    /**
     * Removes a TimeSlot
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot $timesSlotToRemove The TimeSlot to be removed
     * @return void
     */
    public function removeTimesSlot(\HofBootCamp\HofBootcamp\Domain\Model\TimeSlot $timesSlotToRemove)
    {
        $this->timesSlots->detach($timesSlotToRemove);
    }

    /**
     * Returns the timesSlots
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofBootCamp\HofBootcamp\Domain\Model\TimeSlot> $timesSlots
     */
    public function getTimesSlots()
    {
        return $this->timesSlots;
    }

    /**
     * Sets the timesSlots
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofBootCamp\HofBootcamp\Domain\Model\TimeSlot> $timesSlots
     * @return void
     */
    public function setTimesSlots(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $timesSlots)
    {
        $this->timesSlots = $timesSlots;
    }
}
