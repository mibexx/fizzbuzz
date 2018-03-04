<?php

namespace Mibexx\FizzBuzzTest\Replacer;

use Mibexx\FizzBuzz\Replacer\Provider\ReplaceProviderInterface;
use Mibexx\FizzBuzz\Replacer\Replacer;

class ReplacerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @group Unit
     * @group Replacer
     */
    public function testReplace()
    {
        $replacer = new Replacer([]);
        $this->assertEquals(
            $this->tester->getNumberList(1, 15),
            $replacer->replace($this->tester->getNumberList(1, 15))
        );
    }

    /**
     * @group Integration
     * @group Replacer
     */
    public function testReplaceWithProvider()
    {
        $replacer = new Replacer(
            [
                $this->createReplaceProvider(false, 'Fizz'),
                $this->createReplaceProvider(true, 'Buzz'),
                $this->createReplaceProvider(false, 'FizzBuzz')
            ]
        );

        $this->assertEquals(
            [
                'Buzz',
                'Buzz',
                'Buzz'
            ],
            $replacer->replace($this->tester->getNumberList(1, 3))
        );
    }

    /**
     * @param bool $canReplace
     * @param string $replaceWith
     */
    private function createReplaceProvider($canReplace, $replaceWith): ReplaceProviderInterface
    {
        $provider = $this->getMockBuilder(ReplaceProviderInterface::class)
                         ->setMethods(
                             [
                                 'canReplace',
                                 'replace'
                             ]
                         )
                         ->getMock();

        $provider->expects($this->any())
                 ->method('canReplace')
                 ->willReturn($canReplace);

        $provider->expects($this->any())
                 ->method('replace')
                 ->willReturn($replaceWith);

        return $provider;
    }
}