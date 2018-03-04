<?php


namespace Mibexx\FizzBuzz;


use Mibexx\FizzBuzz\Generator\NumberGenerator;
use Mibexx\FizzBuzz\Generator\NumberGeneratorInterface;
use Mibexx\FizzBuzz\Replacer\Provider\BuzzReplacer;
use Mibexx\FizzBuzz\Replacer\Provider\FizzBuzzReplacer;
use Mibexx\FizzBuzz\Replacer\Provider\FizzReplacer;
use Mibexx\FizzBuzz\Replacer\Replacer;
use Mibexx\FizzBuzz\Replacer\ReplacerInterface;

class Factory
{

    /**
     * @return \Mibexx\FizzBuzz\FizzBuzz
     */
    public function createFizzBuzz() : FizzBuzz
    {
        return new FizzBuzz(
            $this->createNumberGenerator(),
            $this->createReplacer()
        );
    }

    /**
     * @return \Mibexx\FizzBuzz\Generator\NumberGenerator
     */
    public function createNumberGenerator() : NumberGeneratorInterface
    {
        return new NumberGenerator();
    }

    /**
     * @return \Mibexx\FizzBuzz\Replacer\Replacer
     */
    public function createReplacer() : ReplacerInterface
    {
        return new Replacer(
            $this->getReplaceProvider()
        );
    }

    /**
     * @return array
     */
    public function getReplaceProvider() : array
    {
        return [
            new FizzBuzzReplacer(),
            new FizzReplacer(),
            new BuzzReplacer()
        ];
    }
}