<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class DayTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Domain\Model\Day
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofBootCamp\HofBootcamp\Domain\Model\Day();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
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
    public function getTimesSlotsReturnsInitialValueForTimeSlot()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTimesSlots()
        );
    }

    /**
     * @test
     */
    public function setTimesSlotsForObjectStorageContainingTimeSlotSetsTimesSlots()
    {
        $timesSlot = new \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot();
        $objectStorageHoldingExactlyOneTimesSlots = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTimesSlots->attach($timesSlot);
        $this->subject->setTimesSlots($objectStorageHoldingExactlyOneTimesSlots);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTimesSlots,
            'timesSlots',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTimesSlotToObjectStorageHoldingTimesSlots()
    {
        $timesSlot = new \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot();
        $timesSlotsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $timesSlotsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($timesSlot));
        $this->inject($this->subject, 'timesSlots', $timesSlotsObjectStorageMock);

        $this->subject->addTimesSlot($timesSlot);
    }

    /**
     * @test
     */
    public function removeTimesSlotFromObjectStorageHoldingTimesSlots()
    {
        $timesSlot = new \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot();
        $timesSlotsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $timesSlotsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($timesSlot));
        $this->inject($this->subject, 'timesSlots', $timesSlotsObjectStorageMock);

        $this->subject->removeTimesSlot($timesSlot);
    }
}
