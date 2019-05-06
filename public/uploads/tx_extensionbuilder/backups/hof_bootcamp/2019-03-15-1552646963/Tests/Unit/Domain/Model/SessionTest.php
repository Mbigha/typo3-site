<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SessionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Domain\Model\Session
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofBootCamp\HofBootcamp\Domain\Model\Session();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMaxParticipantsReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMaxParticipants()
        );
    }

    /**
     * @test
     */
    public function setMaxParticipantsForIntSetsMaxParticipants()
    {
        $this->subject->setMaxParticipants(12);

        self::assertAttributeEquals(
            12,
            'maxParticipants',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStart()
        );
    }

    /**
     * @test
     */
    public function setStartForDateTimeSetsStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'start',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEnd()
        );
    }

    /**
     * @test
     */
    public function setEndForDateTimeSetsEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'end',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForLocation()
    {
        self::assertEquals(
            null,
            $this->subject->getLocation()
        );
    }

    /**
     * @test
     */
    public function setLocationForLocationSetsLocation()
    {
        $locationFixture = new \HofBootCamp\HofBootcamp\Domain\Model\Location();
        $this->subject->setLocation($locationFixture);

        self::assertAttributeEquals(
            $locationFixture,
            'location',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpeakersReturnsInitialValueForSpeaker()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSpeakers()
        );
    }

    /**
     * @test
     */
    public function setSpeakersForObjectStorageContainingSpeakerSetsSpeakers()
    {
        $speaker = new \HofBootCamp\HofBootcamp\Domain\Model\Speaker();
        $objectStorageHoldingExactlyOneSpeakers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSpeakers->attach($speaker);
        $this->subject->setSpeakers($objectStorageHoldingExactlyOneSpeakers);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSpeakers,
            'speakers',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSpeakerToObjectStorageHoldingSpeakers()
    {
        $speaker = new \HofBootCamp\HofBootcamp\Domain\Model\Speaker();
        $speakersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $speakersObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($speaker));
        $this->inject($this->subject, 'speakers', $speakersObjectStorageMock);

        $this->subject->addSpeaker($speaker);
    }

    /**
     * @test
     */
    public function removeSpeakerFromObjectStorageHoldingSpeakers()
    {
        $speaker = new \HofBootCamp\HofBootcamp\Domain\Model\Speaker();
        $speakersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $speakersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($speaker));
        $this->inject($this->subject, 'speakers', $speakersObjectStorageMock);

        $this->subject->removeSpeaker($speaker);
    }

    /**
     * @test
     */
    public function getStudentsReturnsInitialValueForStudent()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getStudents()
        );
    }

    /**
     * @test
     */
    public function setStudentsForObjectStorageContainingStudentSetsStudents()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();
        $objectStorageHoldingExactlyOneStudents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneStudents->attach($student);
        $this->subject->setStudents($objectStorageHoldingExactlyOneStudents);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneStudents,
            'students',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addStudentToObjectStorageHoldingStudents()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();
        $studentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($student));
        $this->inject($this->subject, 'students', $studentsObjectStorageMock);

        $this->subject->addStudent($student);
    }

    /**
     * @test
     */
    public function removeStudentFromObjectStorageHoldingStudents()
    {
        $student = new \HofBootCamp\HofBootcamp\Domain\Model\Student();
        $studentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($student));
        $this->inject($this->subject, 'students', $studentsObjectStorageMock);

        $this->subject->removeStudent($student);
    }
}
