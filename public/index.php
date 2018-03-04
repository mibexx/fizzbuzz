<?php


require '../vendor/autoload.php';

$factory = new \Mibexx\FizzBuzz\Factory();

echo '<h1>FizzBuzz</h1>';
echo '<ul>';
echo '<li>' . implode('</li><li>', $factory->createFizzBuzz()->getReplacedNumbers(50)) . '</li>';
echo '</ul>';