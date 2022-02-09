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
    $length = strlen($string);
    $headPos = 0;
    $tailPos = $length - 1;

    //the loop should run only until the head and tail are either
    //past each other (a negative number, found when there iss an even 
    //number of letters) or at the same position (zero, found when 
    //there is an odd number of letters).  There's no need to check if the center
    //letter is equal to itself.
    while ($tailPos - $headPos > 0) {
        //if the character at the head position is not a letter, 
        //move up to the next character
        while(!ctype_alpha($string[$headPos])){
            $headPos++;
        }
        //if the character at the tail position is not a letter,
        //move down to the next character
        while(!ctype_alpha($string[$tailPos])){
            $tailPos--;
        }
        if (strtolower($string[$headPos]) != strtolower($string[$tailPos])) {
            return false;
        }
        $headPos++;
        $tailPos--;
    }
    return true;
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