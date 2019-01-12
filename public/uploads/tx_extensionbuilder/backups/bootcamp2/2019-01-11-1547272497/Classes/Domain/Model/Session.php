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
 * Session
 */
class Session extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * speakers
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\Speaker>
     */
    protected $speakers = null;

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
        $this->speakers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Adds a Speaker
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Speaker $speaker
     * @return void
     */
    public function addSpeaker(\Bootcamp2\Bootcamp2\Domain\Model\Speaker $speaker)
    {
        $this->speakers->attach($speaker);
    }

    /**
     * Removes a Speaker
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Speaker $speakerToRemove The Speaker to be removed
     * @return void
     */
    public function removeSpeaker(\Bootcamp2\Bootcamp2\Domain\Model\Speaker $speakerToRemove)
    {
        $this->speakers->detach($speakerToRemove);
    }

    /**
     * Returns the speakers
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\Speaker> $speakers
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }

    /**
     * Sets the speakers
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bootcamp2\Bootcamp2\Domain\Model\Speaker> $speakers
     * @return void
     */
    public function setSpeakers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $speakers)
    {
        $this->speakers = $speakers;
    }
}
