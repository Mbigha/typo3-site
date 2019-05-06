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
    public function listActionFetchesAllStudentsFromRepositoryAndAssignsThemToView()
    {

        $allStudents = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $studentRepository = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Domain\Repository\StudentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $studentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allStudents));
        $this->inject($this->subject, 'studentRepository', $studentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('students', $allStudents);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenStudentToView()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('student', $student);

        $this->subject->showAction($student);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenStudentToStudentRepository()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();

        $studentRepository = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Domain\Repository\StudentRepository::class)
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
    public function deleteActionRemovesTheGivenStudentFromStudentRepository()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();

        $studentRepository = $this->getMockBuilder(\HofBootCamp\HofBootcamp\Domain\Repository\StudentRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentRepository->expects(self::once())->method('remove')->with($student);
        $this->inject($this->subject, 'studentRepository', $studentRepository);

        $this->subject->deleteAction($student);
    }
}
