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
 * SpeakerController
 */
class SpeakerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * speakerRepository
     * 
     * @var \HofBootCamp\HofBootcamp\Domain\Repository\SpeakerRepository
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
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Speaker $speaker
     * @return void
     */
    public function showAction(\HofBootCamp\HofBootcamp\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
        
        $uri = $this->uriBuilder->setTargetPageUid(17)->build();
        $this->redirectToUri($uri, 0, 404);
    }
}
