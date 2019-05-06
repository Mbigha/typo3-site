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
     * namen
     * 
     * @var string
     */
    protected $namen = '';

    /**
     * Returns the namen
     * 
     * @return string $namen
     */
    public function getNamen()
    {
        return $this->namen;
    }

    /**
     * Sets the namen
     * 
     * @param string $namen
     * @return void
     */
    public function setNamen($namen)
    {
        $this->namen = $namen;
    }
}
