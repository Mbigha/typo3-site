<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Controller;

/**
 * Test case.
 */
class ParticipantControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Controller\ParticipantController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Controller\ParticipantController::class)
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
    public function listActionFetchesAllParticipantsFromRepositoryAndAssignsThemToView()
    {

        $allParticipants = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $participantRepository = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Domain\Repository\ParticipantRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $participantRepository->expects(self::once())->method('findAll')->will(self::returnValue($allParticipants));
        $this->inject($this->subject, 'participantRepository', $participantRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('participants', $allParticipants);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenParticipantToView()
    {
        $participant = new \HofBootCamp\HofBootcamp\Domain\Model\Participant();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('participant', $participant);

        $this->subject->showAction($participant);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenParticipantToParticipantRepository()
    {
        $participant = new \HofBootCamp\HofBootcamp\Domain\Model\Participant();

        $participantRepository = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Domain\Repository\ParticipantRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $participantRepository->expects(self::once())->method('add')->with($participant);
        $this->inject($this->subject, 'participantRepository', $participantRepository);

        $this->subject->createAction($participant);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenParticipantToView()
    {
        $participant = new \HofBootCamp\HofBootcamp\Domain\Model\Participant();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('participant', $participant);

        $this->subject->editAction($participant);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenParticipantInParticipantRepository()
    {
        $participant = new \HofBootCamp\HofBootcamp\Domain\Model\Participant();

        $participantRepository = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Domain\Repository\ParticipantRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $participantRepository->expects(self::once())->method('update')->with($participant);
        $this->inject($this->subject, 'participantRepository', $participantRepository);

        $this->subject->updateAction($participant);
    }
}
