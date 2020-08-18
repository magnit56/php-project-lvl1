<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Run\run;

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
        $operations = ['*', '+', '-'];
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $operation = $operations[array_rand($operations)];
        $question = "$num1 $operation $num2";
        $correctAnswer = calc($num1, $num2, $operation);
        $data = [];
        $data['question'] = $question;
        $data['correctAnswer'] = $correctAnswer;
        return $data;
    };
    $gameTask = 'What is the result of the expression?';
    run($getData, $gameTask);
}
