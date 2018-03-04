<?php


namespace Mibexx\FizzBuzz\Replacer;


use Mibexx\FizzBuzz\Replacer\Provider\ReplaceProviderInterface;

class Replacer implements ReplacerInterface
{
    /**
     * @var \Mibexx\FizzBuzz\Replacer\Provider\ReplaceProviderInterface[]
     */
    private $replaceProviderList = [];

    /**
     * Replacer constructor.
     *
     * @param \Mibexx\FizzBuzz\Replacer\Provider\ReplaceProviderInterface[] $replaceProviderList
     */
    public function __construct(array $replaceProviderList)
    {
        foreach ($replaceProviderList as $replaceProvider) {
            $this->addProvider($replaceProvider);
        }
    }

    /**
     * @param array $numberList
     *
     * @return array
     */
    public function replace(array $numberList): array
    {
        return array_map(function ($number) {
            return $this->replaceNumber($number);
        }, $numberList);
    }

    /**
     * @param \Mibexx\FizzBuzz\Replacer\Provider\ReplaceProviderInterface $replaceProvider
     */
    private function addProvider(ReplaceProviderInterface $replaceProvider)
    {
        $this->replaceProviderList[] = $replaceProvider;
    }

    /**
     * @param string $number
     *
     * @return string
     */
    private function replaceNumber($number)
    {
        foreach ($this->replaceProviderList as $replacer) {
            if ($replacer->canReplace($number)) {
                return $replacer->replace($number);
            }
        }
        return $number;
    }

}