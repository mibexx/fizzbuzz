<?php

namespace Helper;


use Mibexx\FizzBuzz\Factory;

class FizzBuzzHelper extends \Codeception\Module
{
    /**
     * @return \Mibexx\FizzBuzz\Factory
     */
    public function createFactory() : Factory
    {
        return new Factory();
    }

    /**
     * @param int $from
     * @param int $to
     *
     * @return array
     */
    public function getNumberList($from, $to) : array
    {
        return range($from, $to);
    }

    /**
     * Return the FizzBuzz result for numbers till 20
     *
     * @return array
     */
    public function getTestResultTill20() : array
    {
        return [
            1,
            2,
            'Fizz',
            4,
            'Buzz',
            'Fizz',
            7,
            8,
            'Fizz',
            'Buzz',
            11,
            'Fizz',
            13,
            14,
            'FizzBuzz',
            16,
            17,
            'Fizz',
            19,
            'Buzz'
        ];
    }
}
