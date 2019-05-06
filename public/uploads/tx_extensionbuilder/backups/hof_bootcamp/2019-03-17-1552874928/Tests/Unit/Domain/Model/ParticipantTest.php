<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ParticipantTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Domain\Model\Participant
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofBootCamp\HofBootcamp\Domain\Model\Participant();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
