<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

function Run()
{
    $name = hello();
    $i = 0;
    $j = 0;
    while ($i < 3 && $j == 0) {
        $number = question();
        $userAnswer = userAnswer();
        $rightAnswer = rightAnswer($number);
        isCorrect($userAnswer, $rightAnswer, $name);
        if ($userAnswer == $rightAnswer) {
            $i++;
        } else {
            $j++;
        }
    }
    if ($i = 3 && $j == 0) {
        line("Congrulatations, %s", $name);
    }
}

//function oldHello()
//{
//    line('Welcome to the Brain Game!');
//    line('Answer "yes" if the number is even, otherwise answer "no".');
//    $name = prompt('May I have your name?');
//    line("Hello, %s!", $name);
//    return $name;
//}

//function question()
//{
//    $number = rand(1, 100);
//    line("Question: %s", $number);
//    return $number;
//}

//function userAnswer()
//{
//    $userAnswer = prompt('Your answer');
//    return $userAnswer;
//}











function printWelcome()
{
    line("Welcome to the Brain Game!");
}

function getGameTitle($gameTitle)
{
    return $gameTitle;
}

function printGameTitle()
{
    $gameTitle = getGameTitle();
    if ($gameTitle == "even") {
        line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    } elseif ($gameTitle == "calc") {
        line("What is the result of the expression?");
    } elseif ($gameTitle == "gcd") {
        line("Find the greatest common divisor of given numbers.");
    }
}

function setName()
{
    $name = prompt('May I have your name?');
    return $name;
}

function getName()
{
    return $name;
}

function hello()
{
    $name = getName();
    line("Hello, %s!", $name);
}

function cycle()
{
    $i = 3;
    $correct = true;
    while ($i > 0 && $correct) {

    }
}

function getQuestion()
{
    $number = rand(1, 100);
    line("Question: %s", $number);
    return $number;
}

function setAnswer()
{
    $userAnswer = prompt('Your answer');
    return $userAnswer;
}

function getAnswer($userAnswer)
{
    return $userAnswer;
}

function getCorrectAnswer($number)
{
    if ($number % 2 == 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

function isCorrect($userAnswer, $rightAnswer, $name)
{
    if ($userAnswer == $rightAnswer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.
Let's try again, %s!'", $userAnswer, $rightAnswer, $name);
    }
}