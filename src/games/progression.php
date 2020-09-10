<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Run\run;

const PROGRESSION_COUNT = 10;

function runProgression()
{
    $getData = function () {
        $firstItem = rand(1, 9);
        $step = rand(1, 10);
        $items = [];
        for ($i = 0; $i < PROGRESSION_COUNT; $i++) {
            $items[$i] = $firstItem + $i * $step;
        }
        $riddle = rand(1, 10);
        $correctAnswer = (string) ($items[$riddle]);
        $items[$riddle] = '..';
        $question = implode(' ', $items);
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'What number is missing in the progression?';
    run($getData, $gameTask);
}
