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
class Student extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
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
     * Returns the username
     * 
     * @return string username
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
}
