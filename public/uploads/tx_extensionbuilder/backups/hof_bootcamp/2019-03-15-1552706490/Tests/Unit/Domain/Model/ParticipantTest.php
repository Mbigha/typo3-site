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
    public function getUsernameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUsername()
        );
    }

    /**
     * @test
     */
    public function setUsernameForStringSetsUsername()
    {
        $this->subject->setUsername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'username',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPasswordReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPassword()
        );
    }

    /**
     * @test
     */
    public function setPasswordForStringSetsPassword()
    {
        $this->subject->setPassword('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'password',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }
}
