<?php

namespace BrainGames\Run;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run($getData, $gameTask)
{
    line('Welcome to the Brain Game!');
    line("%s", $gameTask);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($roundsCount = 0; $roundsCount < ROUNDS_COUNT; $roundsCount++) {
        $data = $getData();
        $question = $data['question'];
        $correctAnswer = $data['correctAnswer'];
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");
        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
