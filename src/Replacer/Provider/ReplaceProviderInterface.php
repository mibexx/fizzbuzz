<?php


namespace Mibexx\FizzBuzz\Replacer\Provider;


interface ReplaceProviderInterface
{
    /**
     * @param string $number
     *
     * @return bool
     */
    public function canReplace($number) : bool;

    /**
     * @param string $number
     *
     * @return string
     */
    public function replace($number) : string;
}