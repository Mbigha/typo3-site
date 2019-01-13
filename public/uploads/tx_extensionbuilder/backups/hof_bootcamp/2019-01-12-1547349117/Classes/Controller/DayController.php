<?php
namespace HofBootCamp\HofBootcamp\Controller;


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
 * DayController
 */
class DayController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dayRepository
     * 
     * @var \HofBootCamp\HofBootcamp\Domain\Repository\DayRepository
     * @inject
     */
    protected $dayRepository = null;
    
    /**
     * locationRepository
     *
     * @var \HofBootCamp\HofBootcamp\Domain\Repository\LocationRepository
     * @inject
     */
    protected $locationRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $days = $this->dayRepository->findAll();
        $locations = $this->locationRepository->findAll();
        
        $this->view->assign('days', $days);
        $this->view->assign('locations', $locations);
    }
}
