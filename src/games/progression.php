<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Run\run;

const PROGRESSION_LENGTH = 10;

function getRandProgression($firstItem, $step)
{
    $items = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $items[$i] = $firstItem + $i * $step;
    }
    return $items;
}

function runProgression()
{
    $getData = function () {
        $firstItem = rand(1, 9);
        $step = rand(1, 10);
        $items = getRandProgression($firstItem, $step);
        $riddleIndex = rand(1, 9);
        $correctAnswer = $items[$riddleIndex];
        $items[$riddleIndex] = '..';
        $question = implode(' ', $items);
        $data['question'] = $question;
        $data['correctAnswer'] = (string) $correctAnswer;
        return $data;
    };
    $gameTask = 'What number is missing in the progression?';
    run($getData, $gameTask);
}
