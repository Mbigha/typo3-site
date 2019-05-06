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
     * timeSlotRepository
     * 
     * @var \HofBootCamp\HofBootcamp\Domain\Repository\TimeSlotRepository
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
        $availableSpace = $session->getMaxParticipants() - $session->getNumberOfRegistrations();
        $this->view->assign('session', $session);
        $this->view->assign('availableSpace', $availableSpace);
    }

    /**
     * action registration
     * 
     * @return void
     */
    public function registrationAction()
    {
        $loggedInUser = $GLOBALS['TSFE']->fe_user->user['uid'];
        $sessions = $this->sessionRepository->findAll();
        $this->view->assign('sessions', $sessions);
        $this->view->assign('user', $loggedInUser);
    }

    /**
     * action register
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Participant $user
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Session $session
     * @return void
     */
    public function registerAction(\HofBootCamp\HofBootcamp\Domain\Model\Participant $user, \HofBootCamp\HofBootcamp\Domain\Model\Session $session)
    {
        $session->addParticipant($user);
        $numberOfRegistration = $session->getNumberOfRegistrations() + 1;
        $session->setNumberOfRegistrations($numberOfRegistration);
        $this->addFlashMessage('You are registered for the session', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
    }
}
