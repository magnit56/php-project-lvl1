<?php

namespace BrainGames\Games\Even;

use function BrainGames\Run\run;

function isEven($number)
{
    if ($number % 2 === 0) {
        return 'yes';
    }
    if ($number % 2 !== 0) {
        return  'no';
    }
}

function runEven()
{
    $getData = function () {
        $question = rand(1, 99);
        $correctAnswer = (string) isEven($question);
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'Answer "yes" if the number is even, otherwise answer "no".';
    run($getData, $gameTask);
}
