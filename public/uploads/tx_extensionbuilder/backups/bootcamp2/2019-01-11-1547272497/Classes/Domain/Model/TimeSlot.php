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
 * TimeSlot
 */
class TimeSlot extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * day
     * 
     * @var \DateTime
     */
    protected $day = null;

    /**
     * sessions
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\Session>
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
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the day
     * 
     * @return \DateTime $day
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Sets the day
     * 
     * @param \DateTime $day
     * @return void
     */
    public function setDay(\DateTime $day)
    {
        $this->day = $day;
    }

    /**
     * Adds a Session
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Session $session
     * @return void
     */
    public function addSession(\Bootcamp2\Bootcamp2\Domain\Model\Session $session)
    {
        $this->sessions->attach($session);
    }

    /**
     * Removes a Session
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Session $sessionToRemove The Session to be removed
     * @return void
     */
    public function removeSession(\Bootcamp2\Bootcamp2\Domain\Model\Session $sessionToRemove)
    {
        $this->sessions->detach($sessionToRemove);
    }

    /**
     * Returns the sessions
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\Session> $sessions
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Sets the sessions
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\Session> $sessions
     * @return void
     */
    public function setSessions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sessions)
    {
        $this->sessions = $sessions;
    }
}
