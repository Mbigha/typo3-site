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
 * SessionController
 */
class SessionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sessionRepository
     * 
     * @var \HofBootCamp\HofBootcamp\Domain\Repository\SessionRepository
     * @inject
     */
    protected $sessionRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sessions = $this->sessionRepository->findAll();
        $this->view->assign('sessions', $sessions);
    }

    /**
     * action show
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Session $session
     * @return void
     */
    public function showAction(\HofBootCamp\HofBootcamp\Domain\Model\Session $session)
    {
        $this->view->assign('session', $session);
    }
}
