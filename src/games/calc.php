<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Run\run;

const OPERATIONS = ['*', '+', '-'];

function calc($num1, $num2, $operation)
{
    switch ($operation) {
        case '*':
            return $num1 * $num2;
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
    }
}

function runCalc()
{
    $getData = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $operation = OPERATIONS[array_rand(OPERATIONS)];
        $question = "$num1 $operation $num2";
        $correctAnswer = (string) calc($num1, $num2, $operation);
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'What is the result of the expression?';
    run($getData, $gameTask);
}
