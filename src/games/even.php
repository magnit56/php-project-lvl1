<?php

namespace BrainGames\Games\Even;

use function BrainGames\Run\run;

function isEven($number)
{
    return $number % 2 === 0;
}

function runEven()
{
    $getData = function () {
        $question = rand(1, 99);
        $correctAnswer = isEven($question) ? "yes" : "no";
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'Answer "yes" if the number is even, otherwise answer "no".';
    run($getData, $gameTask);
}
