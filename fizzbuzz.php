<?php

for ($i = 0; $i < 100; $i++) {
    echo fizzbuzz($i)."\n";
}

/**
 * @param int $number
 *
 * @return string
 */
function fizzbuzz(int $number): string
{
    return match (0) {
        $number % 15 => "FizzBuzz",
        $number % 3  => "Fizz",
        $number % 5  => "Buzz",
        default      => (string)$number,
    };
}
