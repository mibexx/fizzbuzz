<?php
namespace Mibexx\BuzzBuzzTest\Replacer\Replacer\Provider;


use Mibexx\FizzBuzz\Replacer\Provider\BuzzReplacer;

class BuzzReplacerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @group Integration
     * @group BuzzReplacer
     * @group ReplaceProvider
     */
    public function testCanReplaceSuccess()
    {
        $replacer = new BuzzReplacer();
        $this->assertTrue($replacer->canReplace(5));
        $this->assertTrue($replacer->canReplace(10));
        $this->assertTrue($replacer->canReplace(15));
    }

    /**
     * @group Integration
     * @group BuzzReplacer
     * @group ReplaceProvider
     */
    public function testReplace()
    {
        $replacer = new BuzzReplacer();
        $this->assertEquals('Buzz', $replacer->replace(3));
        $this->assertEquals('Buzz', $replacer->replace('Fizz'));
    }

    /**
     * @group Integration
     * @group BuzzReplacer
     * @group ReplaceProvider
     */
    public function testCanReplaceFail()
    {
        $replacer = new BuzzReplacer();
        $this->assertFalse($replacer->canReplace(2));
        $this->assertFalse($replacer->canReplace(8));
        $this->assertFalse($replacer->canReplace(14));
        $this->assertFalse($replacer->canReplace('Fizz'));
    }
}