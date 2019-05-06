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
 * StudentController
 */
class StudentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action new
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Student $newStudent
     * @return void
     */
    public function newAction(\HofBootCamp\HofBootcamp\Domain\Model\Student $newStudent = null)
    {
        $this->view->assign('newStudent', $newStudent);
    }

    /**
     * action create
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Student $newStudent
     * @return void
     */
    public function createAction(\HofBootCamp\HofBootcamp\Domain\Model\Student $newStudent)
    {
        $this->addFlashMessage('Registration Successfull. You can now login', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK, FALSE);
        $this->studentRepository->add($newStudent);
        $this->redirect('new');
    }

    /**
     * action edit
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Student $student
     * @ignorevalidation $student
     * @return void
     */
    public function editAction(\HofBootCamp\HofBootcamp\Domain\Model\Student $student)
    {
        $this->view->assign('student', $student);
    }

    /**
     * action update
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Student $student
     * @return void
     */
    public function updateAction(\HofBootCamp\HofBootcamp\Domain\Model\Student $student)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->update($student);
        $this->redirect('list');
    }
}
