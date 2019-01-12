<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Controller;

/**
 * Test case.
 */
class SessionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Controller\SessionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Controller\SessionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSessionsFromRepositoryAndAssignsThemToView()
    {

        $allSessions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sessionRepository = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Domain\Repository\SessionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sessionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSessions));
        $this->inject($this->subject, 'sessionRepository', $sessionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sessions', $allSessions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSessionToView()
    {
        $session = new \Bootcamp2\Bootcamp2\Domain\Model\Session();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('session', $session);

        $this->subject->showAction($session);
    }
}
