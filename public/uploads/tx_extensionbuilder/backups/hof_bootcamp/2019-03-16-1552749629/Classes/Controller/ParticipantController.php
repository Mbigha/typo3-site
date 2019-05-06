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
 * ParticipantController
 */
class ParticipantController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * participantRepository
     * 
     * @var \HofBootCamp\HofBootcamp\Domain\Repository\ParticipantRepository
     * @inject
     */
    protected $participantRepository = null;

    /**
     * userGroupRepository
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository
     * @inject
     */
    protected $userGroupRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $participants = $this->participantRepository->findAll();
        $this->view->assign('participants', $participants);
    }

    /**
     * action show
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Participant $participant
     * @return void
     */
    public function showAction(\HofBootCamp\HofBootcamp\Domain\Model\Participant $participant)
    {
        $this->view->assign('participant', $participant);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
        $userGroupId = 1;
        $usergroup = $this->userGroupRepository->findByUid($userGroupId);
        $this->view->assign('usergroup', $usergroup);
    }

    /**
     * action create
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Participant $newParticipant
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $userGroup
     * @return void
     */
    public function createAction(\HofBootCamp\HofBootcamp\Domain\Model\Participant $newParticipant, \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $userGroup)
    {
        $this->addFlashMessage('Registration Successful!! You can now login', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
        $newParticipant->addUsergroup($userGroup);
        $this->participantRepository->add($newParticipant);
        $this->redirect('new');
    }

    /**
     * action edit
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Participant $participant
     * @ignorevalidation $participant
     * @return void
     */
    public function editAction(\HofBootCamp\HofBootcamp\Domain\Model\Participant $participant)
    {
        $this->view->assign('participant', $participant);
    }

    /**
     * action update
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Participant $participant
     * @return void
     */
    public function updateAction(\HofBootCamp\HofBootcamp\Domain\Model\Participant $participant)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->participantRepository->update($participant);
        $this->redirect('list');
    }
}
