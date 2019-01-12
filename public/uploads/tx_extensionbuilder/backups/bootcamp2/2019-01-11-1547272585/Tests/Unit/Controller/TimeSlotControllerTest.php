<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Controller;

/**
 * Test case.
 */
class TimeSlotControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Controller\TimeSlotController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Controller\TimeSlotController::class)
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
    public function listActionFetchesAllTimeSlotsFromRepositoryAndAssignsThemToView()
    {

        $allTimeSlots = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $timeSlotRepository = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Domain\Repository\TimeSlotRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $timeSlotRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTimeSlots));
        $this->inject($this->subject, 'timeSlotRepository', $timeSlotRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('timeSlots', $allTimeSlots);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTimeSlotToView()
    {
        $timeSlot = new \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('timeSlot', $timeSlot);

        $this->subject->showAction($timeSlot);
    }
}
