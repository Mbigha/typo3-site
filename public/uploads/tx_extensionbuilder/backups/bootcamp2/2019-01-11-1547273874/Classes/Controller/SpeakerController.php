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
 * SpeakerController
 */
class SpeakerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * speakerRepository
     * 
     * @var \Bootcamp2\Bootcamp2\Domain\Repository\SpeakerRepository
     * @inject
     */
    protected $speakerRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $speakers = $this->speakerRepository->findAll();
        $this->view->assign('speakers', $speakers);
    }

    /**
     * action show
     * 
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Speaker $speaker
     * @return void
     */
    public function showAction(\Bootcamp2\Bootcamp2\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
    }
}
