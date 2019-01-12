<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SessionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Domain\Model\Session
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Bootcamp2\Bootcamp2\Domain\Model\Session();
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
        $speaker = new \Bootcamp2\Bootcamp2\Domain\Model\Speaker();
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
        $speaker = new \Bootcamp2\Bootcamp2\Domain\Model\Speaker();
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
        $speaker = new \Bootcamp2\Bootcamp2\Domain\Model\Speaker();
        $speakersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $speakersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($speaker));
        $this->inject($this->subject, 'speakers', $speakersObjectStorageMock);

        $this->subject->removeSpeaker($speaker);
    }
}
