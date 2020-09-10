<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Run\run;

function gcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

function runGcd()
{
    $getData = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $question = "$num1 $num2";
        $correctAnswer = (string) gcd($num1, $num2);
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'Find the greatest common divisor of given numbers.';
    run($getData, $gameTask);
}
