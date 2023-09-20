<?php
// Solution for Task 1: Looping with Increment using a Function

// Using a for loop:
function printEvenNumbersFor($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . "  ";
        }
    }
}

echo "Using for loop: ";
printEvenNumbersFor(2, 20, 2);
echo "\n=================================================================\n";

//Using a while loop:
function printEvenNumbersWhile($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . "  ";
        }
        $i += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersWhile(2, 20, 2);
echo "\n=================================================================\n";

//Using a do-while loop:

function printEvenNumbersDoWhile($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . "  ";
        }
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersDoWhile(2, 20, 2);