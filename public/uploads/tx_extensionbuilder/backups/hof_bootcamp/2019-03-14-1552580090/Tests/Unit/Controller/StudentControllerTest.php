<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Controller;

/**
 * Test case.
 */
class StudentControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Controller\StudentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Controller\StudentController::class)
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
    public function createActionAddsTheGivenStudentToStudentRepository()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();

        $studentRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentRepository->expects(self::once())->method('add')->with($student);
        $this->inject($this->subject, 'studentRepository', $studentRepository);

        $this->subject->createAction($student);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenStudentToView()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('student', $student);

        $this->subject->editAction($student);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenStudentInStudentRepository()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();

        $studentRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentRepository->expects(self::once())->method('update')->with($student);
        $this->inject($this->subject, 'studentRepository', $studentRepository);

        $this->subject->updateAction($student);
    }
}
