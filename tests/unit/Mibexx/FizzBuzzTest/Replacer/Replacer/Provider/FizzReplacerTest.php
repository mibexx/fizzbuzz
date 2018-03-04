<?php
namespace Mibexx\FizzBuzzTest\Replacer\Replacer\Provider;

use Mibexx\FizzBuzz\Replacer\Provider\FizzReplacer;

class FizzReplacerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @group Integration
     * @group FizzReplacer
     * @group ReplaceProvider
     */
    public function testCanReplaceSuccess()
    {
        $replacer = new FizzReplacer();
        $this->assertTrue($replacer->canReplace(3));
        $this->assertTrue($replacer->canReplace(6));
        $this->assertTrue($replacer->canReplace(9));
    }

    /**
     * @group Integration
     * @group FizzReplacer
     * @group ReplaceProvider
     */
    public function testReplace()
    {
        $replacer = new FizzReplacer();
        $this->assertEquals('Fizz', $replacer->replace(3));
        $this->assertEquals('Fizz', $replacer->replace('Buzz'));
    }

    /**
     * @group Integration
     * @group FizzReplacer
     * @group ReplaceProvider
     */
    public function testCanReplaceFail()
    {
        $replacer = new FizzReplacer();
        $this->assertFalse($replacer->canReplace(2));
        $this->assertFalse($replacer->canReplace(8));
        $this->assertFalse($replacer->canReplace(14));
        $this->assertFalse($replacer->canReplace('Buzz'));
    }
}