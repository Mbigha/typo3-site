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
 * Speaker
 */
class Speaker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * speakers
     * 
     * @var \Bootcamp2\Bootcamp2\Domain\Model\Session
     */
    protected $speakers = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the speakers
     * 
     * @return \Bootcamp2\Bootcamp2\Domain\Model\Session $speakers
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }

    /**
     * Sets the speakers
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Session $speakers
     * @return void
     */
    public function setSpeakers(\Bootcamp2\Bootcamp2\Domain\Model\Session $speakers)
    {
        $this->speakers = $speakers;
    }
}
