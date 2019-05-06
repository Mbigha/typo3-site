<?php
namespace HofBootCamp\HofBootcamp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class StudentTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofBootCamp\HofBootcamp\Domain\Model\Student
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofBootCamp\HofBootcamp\Domain\Model\Student();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNamenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNamen()
        );
    }

    /**
     * @test
     */
    public function setNamenForStringSetsNamen()
    {
        $this->subject->setNamen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'namen',
            $this->subject
        );
    }
}
