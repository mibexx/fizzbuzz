<?php


namespace Mibexx\FizzBuzz;


use Mibexx\FizzBuzz\Generator\NumberGeneratorInterface;
use Mibexx\FizzBuzz\Replacer\ReplacerInterface;

class FizzBuzz
{
    /**
     * @var \Mibexx\FizzBuzz\Generator\NumberGeneratorInterface
     */
    private $numberGenerator;

    /**
     * @var \Mibexx\FizzBuzz\Replacer\ReplacerInterface
     */
    private $replacer;

    /**
     * FizzBuzz constructor.
     *
     * @param \Mibexx\FizzBuzz\Generator\NumberGeneratorInterface $numberGenerator
     * @param \Mibexx\FizzBuzz\Replacer\ReplacerInterface $replacer
     */
    public function __construct(
        NumberGeneratorInterface $numberGenerator,
        ReplacerInterface $replacer
    ) {
        $this->numberGenerator = $numberGenerator;
        $this->replacer = $replacer;
    }


    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function getReplacedNumbers($to, $from = 1) : array
    {
        return $this->replacer->replace(
            $this->numberGenerator->generate($to, $from)
        );
    }
}