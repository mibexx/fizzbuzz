<?php


namespace Mibexx\FizzBuzz\Generator;


interface NumberGeneratorInterface
{
    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function generate($to, $from) : array;
}