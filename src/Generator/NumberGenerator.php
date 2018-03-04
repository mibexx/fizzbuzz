<?php


namespace Mibexx\FizzBuzz\Generator;


class NumberGenerator implements NumberGeneratorInterface
{
    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function generate($to, $from): array
    {
        return range($from, $to);
    }

}