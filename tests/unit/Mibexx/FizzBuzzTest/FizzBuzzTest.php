<?php

namespace Mibexx\FizzBuzzTest;

use Mibexx\FizzBuzz\FizzBuzz;
use Mibexx\FizzBuzz\Generator\NumberGeneratorInterface;
use Mibexx\FizzBuzz\Replacer\ReplacerInterface;

class FizzBuzzTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;


    /**
     * @group Integration
     * @group FizzBuzz
     */
    public function testGetReplacedNumbersIntegration()
    {
        $fizzBuzz = $this->tester->createFactory()->createFizzBuzz();
        $this->assertEquals(
            $this->tester->getTestResultTill20(),
            $fizzBuzz->getReplacedNumbers(20, 1)
        );
    }

    /**
     * @group Unit
     * @group FizzBuzz
     */
    public function testGetReplacedNumbers()
    {
        $numberGenerator = $this->getMockBuilder(NumberGeneratorInterface::class)
                                ->setMethods(['generate'])
                                ->getMock();

        $replacer = $this->getMockBuilder(ReplacerInterface::class)
                         ->setMethods(['replace'])
                         ->getMock();

        $numberGenerator->expects($this->once())
                        ->method('generate')
                        ->with($this->equalTo(20), $this->equalTo(1))
                        ->willReturn($this->tester->getNumberList(1, 20));

        $replacer->expects($this->once())
                 ->method('replace')
                 ->with($this->equalTo($this->tester->getNumberList(1, 20)))
                 ->willReturn($this->tester->getTestResultTill20());

        $fizzBuzz = new FizzBuzz(
            $numberGenerator,
            $replacer
        );

        $this->assertEquals(
            $this->tester->getTestResultTill20(),
            $fizzBuzz->getReplacedNumbers(20, 1)
        );

    }
}