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
 * SessionController
 */
class SessionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sessionRepository
     * 
     * @var \Bootcamp2\Bootcamp2\Domain\Repository\SessionRepository
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
     * @param \Bootcamp2\Bootcamp2\Domain\Model\Session $session
     * @return void
     */
    public function showAction(\Bootcamp2\Bootcamp2\Domain\Model\Session $session)
    {
        $this->view->assign('session', $session);
    }
}
