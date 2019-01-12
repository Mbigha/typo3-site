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
 * TimeSlotController
 */
class TimeSlotController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * timeSlotRepository
     * 
     * @var \Bootcamp2\Bootcamp2\Domain\Repository\TimeSlotRepository
     * @inject
     */
    protected $timeSlotRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $timeSlots = $this->timeSlotRepository->findAll();
        $this->view->assign('timeSlots', $timeSlots);
    }

    /**
     * action show
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot $timeSlot
     * @return void
     */
    public function showAction(\Bootcamp2\Bootcamp2\Domain\Model\TimeSlot $timeSlot)
    {
        $this->view->assign('timeSlot', $timeSlot);
    }
}
