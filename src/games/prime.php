<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Run\run;

function isPrime($number)
{
    if (gmp_prob_prime($number) == 0) {
        return 'no';
    }
    if (gmp_prob_prime($number) == 2) {
        return 'yes';
    }
}

function runPrime()
{
    $getData = function () {
        $question = rand(1, 99);
        $correctAnswer = (string) isPrime($question);
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    run($getData, $gameTask);
}
