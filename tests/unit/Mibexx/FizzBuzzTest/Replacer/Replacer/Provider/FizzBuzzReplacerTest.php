<?php
namespace Mibexx\FizzFizzBuzzTest\Replacer\Replacer\Provider;

use Mibexx\FizzBuzz\Replacer\Provider\FizzBuzzReplacer;

class FizzBuzzReplacerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @group Integration
     * @group FizzBuzzReplacer
     * @group ReplaceProvider
     */
    public function testCanReplaceSuccess()
    {
        $replacer = new FizzBuzzReplacer();
        $this->assertTrue($replacer->canReplace(15));
        $this->assertTrue($replacer->canReplace(30));
        $this->assertTrue($replacer->canReplace(45));
    }

    /**
     * @group Integration
     * @group FizzBuzzReplacer
     * @group ReplaceProvider
     */
    public function testReplace()
    {
        $replacer = new FizzBuzzReplacer();
        $this->assertEquals('FizzBuzz', $replacer->replace(15));
        $this->assertEquals('FizzBuzz', $replacer->replace('Boo'));
    }

    /**
     * @group Integration
     * @group FizzBuzzReplacer
     * @group ReplaceProvider
     */
    public function testCanReplaceFail()
    {
        $replacer = new FizzBuzzReplacer();
        $this->assertFalse($replacer->canReplace(2));
        $this->assertFalse($replacer->canReplace(8));
        $this->assertFalse($replacer->canReplace(14));
        $this->assertFalse($replacer->canReplace('Boo'));
    }
}