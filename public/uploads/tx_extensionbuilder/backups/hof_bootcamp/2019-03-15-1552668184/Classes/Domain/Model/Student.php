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
 * Student
 */
class Student extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * username
     * 
     * @var string
     */
    protected $username = '';

    /**
     * password
     * 
     * @var string
     */
    protected $password = '';

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
     * Returns the username
     * 
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the username
     * 
     * @param string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Returns the password
     * 
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the password
     * 
     * @param string $password
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

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
}
