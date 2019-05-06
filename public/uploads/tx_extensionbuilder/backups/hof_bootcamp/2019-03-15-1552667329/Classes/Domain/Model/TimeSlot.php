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
 * A time slot of an event day
 */
class TimeSlot extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * day
     * 
     * @var \HofBootCamp\HofBootcamp\Domain\Model\Day
     */
    protected $day = null;

    /**
     * timeRange
     * 
     * @var string
     */
    protected $timeRange = '';

    /**
     * A time slot can have many sessions, but a session can be assigned to only one
     * time slot
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofBootCamp\HofBootcamp\Domain\Model\Session>
     * @cascade remove
     */
    protected $sessions = null;

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
        $this->sessions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the day object for a time slot
     * 
     * @return \HofBootCamp\HofBootcamp\Domain\Model\Day $day
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Returns the timeRange
     * 
     * @return string $timeRange
     */
    public function getTimeRange()
    {
        return $this->timeRange;
    }

    /**
     * Sets the timeRange
     * 
     * @param string $timeRange
     * @return void
     */
    public function setTimeRange($timeRange)
    {
        $this->timeRange = $timeRange;
    }

    /**
     * Adds a Session
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Session $session
     * @return void
     */
    public function addSession(\HofBootCamp\HofBootcamp\Domain\Model\Session $session)
    {
        $this->sessions->attach($session);
    }

    /**
     * Removes a Session
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Session $sessionToRemove The Session to be removed
     * @return void
     */
    public function removeSession(\HofBootCamp\HofBootcamp\Domain\Model\Session $sessionToRemove)
    {
        $this->sessions->detach($sessionToRemove);
    }

    /**
     * Returns the sessions
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofBootCamp\HofBootcamp\Domain\Model\Session> $sessions
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Sets the sessions
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofBootCamp\HofBootcamp\Domain\Model\Session> $sessions
     * @return void
     */
    public function setSessions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sessions)
    {
        $this->sessions = $sessions;
    }
}
