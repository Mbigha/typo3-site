<?php
namespace Bootcamp2\Bootcamp2\Controller;


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
 * DayController
 */
class DayController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dayRepository
     * 
     * @var \Bootcamp2\Bootcamp2\Domain\Repository\DayRepository
     * @inject
     */
    protected $dayRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $days = $this->dayRepository->findAll();
        $this->view->assign('days', $days);
    }

    /**
     * action show
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Day $day
     * @return void
     */
    public function showAction(\Bootcamp2\Bootcamp2\Domain\Model\Day $day)
    {
        $this->view->assign('day', $day);
    }
}
