<?php

// Solution for Task 4: Fibonacci Series printing using a Function

function printFibonacci($count)
{
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $count; $i++) {
        echo $first . ' ';

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

echo "Fibonacci Series : ";
printFibonacci(15);