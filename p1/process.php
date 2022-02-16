<?php

session_start();


// $palindromeTestStrings = [
//     "madam",
//     "Madam",
//     "adam",
//     "race car",
//     "Anna!",
//     "abc!!!cba",
//     "!",
//     "",
//     "E",
//     "aáa",
//     "aéáa",
//     "é",
// ];

// $vowelCountTestStrings = [
//     "aeiou",
//     "AEIOU",
//     "Hello World",
//     "dry",
//     "Bonzai?",
//     "höláa",
// ];

/**
 * Determine whether a string is a palindrome.  Ignores non-alpha
 * characters.
 *
 * String $string - the string to examine.
 *
 * Returns true if the string is a palindrome.
 */
function isPalindrome(string $string)
{
    $result = null;
    $length = strlen($string);
    $stringStart = 0;
    $stringEnd = $length - 1;
    $headPosition = $stringStart;
    $tailPosition = $stringEnd;

    /*
    Starting at either end of the string, compare valid characters.
    */
    while ($headPosition <= $tailPosition) {
        while (!ctype_alpha($string[$headPosition])) {
            $headPosition++;
            if ($headPosition > $stringEnd) {
                break 2;
            }
        }

        while (!ctype_alpha($string[$tailPosition])) {
            $tailPosition--;
            if ($tailPosition < $stringStart) {
                break 2;
            }
        }

        if ($tailPosition < $headPosition) {
            break;
        }
        if (strtolower($string[$headPosition]) == strtolower($string[$tailPosition])) {
            $result = true;
        } else {
            $result = false;
            break;
        }
        $headPosition++;
        $tailPosition--;
    }

    return $result;
}


/**
 * Count how many vowels are in a string.
 *
 * String $string - the string to examine.
 *
 * Returns integer representing number of vowels in the string.
 */
function vowelCount(string $string)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $length = strlen($string);
    $numberOfVowels = 0;

    /*  By definition in the PHP documentation
        (https://www.php.net/manual/en/language.types.string.php#language.types.string.details),
        strings are arrays of characters. Step through the string array, searching for each
        character in the string in a defined array of vowels.
     */
    for ($i = 0; $i < $length; $i++) {
        if (in_array(strtolower($string[$i]), $vowels, false)) {
            $numberOfVowels++;
        }
    }
    return $numberOfVowels;
}

$word = $_POST['word'];

$isPalindrome = isPalindrome($word);
$vowelCount = vowelCount($word);

$_SESSION['results'] = [
    'isPalindrome' => $isPalindrome,
    'vowelCount' => $vowelCount,
    'word' => $word,
];

#redirect
header('Location: index.php');