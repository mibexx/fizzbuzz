<?php


namespace Mibexx\FizzBuzz\Replacer\Provider;


class BuzzReplacer implements ReplaceProviderInterface
{
    /**
     * @param string $number
     *
     * @return bool
     */
    public function canReplace($number): bool
    {
        return is_numeric($number) && !($number % 5);
    }

    /**
     * @param string $number
     *
     * @return string
     */
    public function replace($number): string
    {
        return 'Buzz';
    }

}