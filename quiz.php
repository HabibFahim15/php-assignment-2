<?php

$questions = [
    ['questions' => 'waht is 2+2', 'correct' => '4', 'answer' => '4'],
    ['questions' => 'waht is capital of Bangladesh', 'correct' => 'dhaka'],
    ['questions' => 'Who wrotes agnibina', 'correct' => 'nazrul'],

];

$answers = [];

foreach ($questions as $index => $question) {
    echo ($index + 1) . "." . $question['questions'] . "\n";
    $answers[] = trim(readline("your answer : "));
}

function evaluateQuiz(array $questions , array $answers):int
{
    $score = 0;
    foreach($questions as $index => $question){
        if($answers[$index] === $question['correct']){
            $score++;
        }
    }
    return $score;
}


$myScore = evaluateQuiz($questions , $answers);

echo "\n You scored $myScore out of ". count($questions) . "\n";

if($myScore === count($questions)){
    echo "Excellent job : ! \n";
}elseif($myScore >= 1){
    echo "Good effort : ! \n";
}else{
    echo "Better luck next time : ! \n";
}