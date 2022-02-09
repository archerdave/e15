<?php


$palindromeTestStrings = [
    "madam",
    "Madam",
    "adam",
    "race car",
    "Anna!",
];

$vowelCountTestStrings = [
    "aeiou",
    "AEIOU",
    "Hello World",
    "dry",
    "Bonzai?",
];


function isPalindrome(string $string){
    #stub
    return false;
}

function vowelCount(string $string){
    //for now, testing with unaccented, non-special vowels.
    //testing will be done by a case-insenstive comparison against
    //the letter in question
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $length = strlen($string);
    $numberOfVowels = 0;

    /*  By definition in the PHP documentation 
        (https://www.php.net/manual/en/language.types.string.php#language.types.string.details), 
        strings are arrays of characters. Step through the string array, searching for each 
        character in the string in a defined array of vowels.
     */
    for($i = 0; $i < $length; $i++){
        if(in_array(strtolower($string[$i]),$vowels,false)){
            $numberOfVowels++;
        }
    }
    return $numberOfVowels;
}

require 'index-view.php';