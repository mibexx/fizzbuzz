<?php
namespace Mibexx\FizzBuzzTest\Generator;

use Mibexx\FizzBuzz\Generator\NumberGenerator;

class NumberGeneratorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @group Integration
     * @group Unit
     * @group NumberGenerator
     */
    public function testGenerate()
    {
        $numberGenerator = new NumberGenerator();
        $this->assertEquals(
            $this->tester->getNumberList(1, 20),
            $numberGenerator->generate(20, 1)
        );
    }
}