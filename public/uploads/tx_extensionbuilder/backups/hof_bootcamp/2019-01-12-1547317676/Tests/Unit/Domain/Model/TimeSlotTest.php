<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TimeSlotTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofBootCamp\HofBootcamp\Domain\Model\TimeSlot();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTimeRangeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTimeRange()
        );
    }

    /**
     * @test
     */
    public function setTimeRangeForStringSetsTimeRange()
    {
        $this->subject->setTimeRange('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'timeRange',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSessionsReturnsInitialValueForSession()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSessions()
        );
    }

    /**
     * @test
     */
    public function setSessionsForObjectStorageContainingSessionSetsSessions()
    {
        $session = new \HofBootCamp\HofBootcamp\Domain\Model\Session();
        $objectStorageHoldingExactlyOneSessions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSessions->attach($session);
        $this->subject->setSessions($objectStorageHoldingExactlyOneSessions);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSessions,
            'sessions',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSessionToObjectStorageHoldingSessions()
    {
        $session = new \HofBootCamp\HofBootcamp\Domain\Model\Session();
        $sessionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($session));
        $this->inject($this->subject, 'sessions', $sessionsObjectStorageMock);

        $this->subject->addSession($session);
    }

    /**
     * @test
     */
    public function removeSessionFromObjectStorageHoldingSessions()
    {
        $session = new \HofBootCamp\HofBootcamp\Domain\Model\Session();
        $sessionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($session));
        $this->inject($this->subject, 'sessions', $sessionsObjectStorageMock);

        $this->subject->removeSession($session);
    }
}
