<?php

$answer = $_GET['answer'];

$correct = $answer == 'pumpkin';

require 'process-view.php';