<?php


namespace Mibexx\FizzBuzz\Replacer\Provider;


class FizzBuzzReplacer implements ReplaceProviderInterface
{
    /**
     * @param string $number
     *
     * @return bool
     */
    public function canReplace($number): bool
    {
        return is_numeric($number) && !($number % 15);
    }

    /**
     * @param string $number
     *
     * @return string
     */
    public function replace($number): string
    {
        return 'FizzBuzz';
    }

}