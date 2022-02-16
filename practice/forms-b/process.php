<?php

session_start();

$answer = $_GET['answer'];

$correct = $answer == 'pumpkin';

$_SESSION['results'] = [
    'answer' => $answer,
    'correct' => $correct
];

#redirect 
header('Location: done.php');