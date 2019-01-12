<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Controller;

/**
 * Test case.
 */
class SpeakerControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Controller\SpeakerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Controller\SpeakerController::class)
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
    public function listActionFetchesAllSpeakersFromRepositoryAndAssignsThemToView()
    {

        $allSpeakers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $speakerRepository = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Domain\Repository\SpeakerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $speakerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSpeakers));
        $this->inject($this->subject, 'speakerRepository', $speakerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('speakers', $allSpeakers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSpeakerToView()
    {
        $speaker = new \Bootcamp2\Bootcamp2\Domain\Model\Speaker();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('speaker', $speaker);

        $this->subject->showAction($speaker);
    }
}
