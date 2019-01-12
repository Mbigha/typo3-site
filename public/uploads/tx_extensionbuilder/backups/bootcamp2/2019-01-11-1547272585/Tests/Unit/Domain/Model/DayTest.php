<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class DayTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Domain\Model\Day
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Bootcamp2\Bootcamp2\Domain\Model\Day();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForDateTimeSetsTitle()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setTitle($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDayNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDayNumber()
        );
    }

    /**
     * @test
     */
    public function setDayNumberForIntSetsDayNumber()
    {
        $this->subject->setDayNumber(12);

        self::assertAttributeEquals(
            12,
            'dayNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTimeslotsReturnsInitialValueForTimeSlot()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTimeslots()
        );
    }

    /**
     * @test
     */
    public function setTimeslotsForObjectStorageContainingTimeSlotSetsTimeslots()
    {
        $timeslot = new \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot();
        $objectStorageHoldingExactlyOneTimeslots = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTimeslots->attach($timeslot);
        $this->subject->setTimeslots($objectStorageHoldingExactlyOneTimeslots);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTimeslots,
            'timeslots',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTimeslotToObjectStorageHoldingTimeslots()
    {
        $timeslot = new \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot();
        $timeslotsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $timeslotsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($timeslot));
        $this->inject($this->subject, 'timeslots', $timeslotsObjectStorageMock);

        $this->subject->addTimeslot($timeslot);
    }

    /**
     * @test
     */
    public function removeTimeslotFromObjectStorageHoldingTimeslots()
    {
        $timeslot = new \Bootcamp2\Bootcamp2\Domain\Model\TimeSlot();
        $timeslotsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $timeslotsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($timeslot));
        $this->inject($this->subject, 'timeslots', $timeslotsObjectStorageMock);

        $this->subject->removeTimeslot($timeslot);
    }
}
