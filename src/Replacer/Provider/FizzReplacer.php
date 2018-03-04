<?php


namespace Mibexx\FizzBuzz\Replacer\Provider;


class FizzReplacer implements ReplaceProviderInterface
{
    /**
     * @param string $number
     *
     * @return bool
     */
    public function canReplace($number): bool
    {
        return is_numeric($number) && !($number % 3);
    }

    /**
     * @param string $number
     *
     * @return string
     */
    public function replace($number): string
    {
        return 'Fizz';
    }

}