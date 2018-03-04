<?php


namespace Mibexx\FizzBuzz\Replacer;


interface ReplacerInterface
{
    /**
     * @param array $numberList
     *
     * @return array
     */
    public function replace(array $numberList) : array;
}