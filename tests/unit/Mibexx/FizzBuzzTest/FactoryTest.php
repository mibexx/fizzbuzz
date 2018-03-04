<?php
namespace Mibexx\FizzBuzzTest;

use Mibexx\FizzBuzz\Factory;
use Mibexx\FizzBuzz\FizzBuzz;
use Mibexx\FizzBuzz\Generator\NumberGeneratorInterface;
use Mibexx\FizzBuzz\Replacer\ReplacerInterface;

class FactoryTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;


    /**
     * @group Integration
     * @group Factory
     */
    public function testCreateNumberGenerator()
    {
        $factory = new Factory();
        $this->assertInstanceOf(
            NumberGeneratorInterface::class,
            $factory->createNumberGenerator()
        );
    }

    /**
     * @group Integration
     * @group Factory
     */
    public function testCreateReplacer()
    {
        $factory = new Factory();
        $this->assertInstanceOf(
            ReplacerInterface::class,
            $factory->createReplacer()
        );
    }

    /**
     * @group Integration
     * @group Factory
     */
    public function testCreateFizzBuzz()
    {
        $factory = new Factory();
        $this->assertInstanceOf(
            FizzBuzz::class,
            $factory->createFizzBuzz()
        );
    }
}