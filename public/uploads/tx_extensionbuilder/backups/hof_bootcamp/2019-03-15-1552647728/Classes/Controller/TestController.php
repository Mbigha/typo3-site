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
 * TestController
 */
class TestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $tests = $this->testRepository->findAll();
        $this->view->assign('tests', $tests);
    }

    /**
     * action show
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Test $test
     * @return void
     */
    public function showAction(\HofBootCamp\HofBootcamp\Domain\Model\Test $test)
    {
        $this->view->assign('test', $test);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Test $newTest
     * @return void
     */
    public function createAction(\HofBootCamp\HofBootcamp\Domain\Model\Test $newTest)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->testRepository->add($newTest);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Test $test
     * @ignorevalidation $test
     * @return void
     */
    public function editAction(\HofBootCamp\HofBootcamp\Domain\Model\Test $test)
    {
        $this->view->assign('test', $test);
    }

    /**
     * action update
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Test $test
     * @return void
     */
    public function updateAction(\HofBootCamp\HofBootcamp\Domain\Model\Test $test)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->testRepository->update($test);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Test $test
     * @return void
     */
    public function deleteAction(\HofBootCamp\HofBootcamp\Domain\Model\Test $test)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->testRepository->remove($test);
        $this->redirect('list');
    }
}
