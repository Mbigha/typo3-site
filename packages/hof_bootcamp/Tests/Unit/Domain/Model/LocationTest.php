<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class LocationTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Domain\Model\Location
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofBootCamp\HofBootcamp\Domain\Model\Location();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRoomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRoom()
        );
    }

    /**
     * @test
     */
    public function setRoomForStringSetsRoom()
    {
        $this->subject->setRoom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'room',
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
}
