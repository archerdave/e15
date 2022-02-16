<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $isPalindrome = $results['isPalindrome'];
    $vowelCount = $results['vowelCount'];
    $word = $results['word'];
    $_SESSION['results'] = null;
}

require 'index-view.php';