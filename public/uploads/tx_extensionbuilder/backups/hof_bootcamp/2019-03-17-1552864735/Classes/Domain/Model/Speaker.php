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
 * A speaker in the event.
 */
class Speaker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var int
     */
    protected $title = '';

    /**
     * firstName
     * 
     * @var string
     */
    protected $firstName = '';

    /**
     * lastName
     * 
     * @var string
     */
    protected $lastName = '';

    /**
     * organisation
     * 
     * @var string
     */
    protected $organisation = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * url
     * 
     * @var string
     */
    protected $url = '';

    /**
     * email
     * 
     * @var string
     */
    protected $email = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * Returns the firstName
     * 
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     * 
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     * 
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     * 
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the organisation
     * 
     * @return string $organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets the organisation
     * 
     * @param string $organisation
     * @return void
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * Returns the url
     * 
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the url
     * 
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the title
     * 
     * @return int title
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
}
