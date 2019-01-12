<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Controller;

/**
 * Test case.
 */
class DayControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Controller\DayController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Controller\DayController::class)
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
    public function listActionFetchesAllDaysFromRepositoryAndAssignsThemToView()
    {

        $allDays = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dayRepository = $this->getMockBuilder(\Bootcamp2\Bootcamp2\Domain\Repository\DayRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $dayRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDays));
        $this->inject($this->subject, 'dayRepository', $dayRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('days', $allDays);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDayToView()
    {
        $day = new \Bootcamp2\Bootcamp2\Domain\Model\Day();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('day', $day);

        $this->subject->showAction($day);
    }
}
