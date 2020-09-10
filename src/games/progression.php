<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Run\run;

const PROGRESSION_LENGTH = 10;

function getRandProgression($firstElem, $step)
{
    $progression = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[$i] = $firstElem + $i * $step;
    }
    return $progression;
}

function runProgression()
{
    $getData = function () {
        $firstElem = rand(1, 9);
        $step = rand(1, 10);
        $progression = getRandProgression($firstElem, $step);
        $riddleIndex = rand(1, 9);
        $correctAnswer = $progression[$riddleIndex];
        $progression[$riddleIndex] = '..';
        $question = implode(' ', $progression);
        $data['question'] = $question;
        $data['correctAnswer'] = (string) $correctAnswer;
        return $data;
    };
    $gameTask = 'What number is missing in the progression?';
    run($getData, $gameTask);
}
