<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Run\run;

function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime()
{
    $getData = function () {
        $question = rand(1, 99);
        $correctAnswer = isPrime($question) ? "yes" : "no";
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    run($getData, $gameTask);
}
