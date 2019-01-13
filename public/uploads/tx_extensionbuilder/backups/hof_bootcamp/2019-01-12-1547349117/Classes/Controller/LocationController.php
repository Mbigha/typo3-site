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
 * LocationController
 */
class LocationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
        $locations = $this->locationRepository->findAll();
        $this->view->assign('locations', $locations);
    }

    /**
     * action show
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Location $location
     * @return void
     */
    public function showAction(\HofBootCamp\HofBootcamp\Domain\Model\Location $location)
    {
        $this->view->assign('location', $location);
    }
}
