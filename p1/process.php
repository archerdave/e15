<?php

session_start();

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


/**
 * Shifts the letters in the string down one letter.  Retains capitalization.
 * Ignores non-letters.  Wraps around the alphabet.  A -> B, z -> a, etc.
 *
 * String $string - The string to process
 *
 * Returns a string with the modified characters
 */
function letterShift($string)
{
    $result = null;
    $stringStart = 0;
    $length = strlen($string) - 1;
    $stringEnd = $length;

    for ($i = $stringStart; $i <= $length; $i++) {
        $newChar = nextChar($string[$i]);
        $result = $result.$newChar;
    }

    return $result;
}


function nextChar($string)
{
    $char = null;
    if ($string == 'z') {
        $char = 'a';
    } elseif ($string == 'Z') {
        $char  = 'A';
    } else {
        $char = $string[0];
        $char++;
    }
    return $char;
}


$word = $_POST['word'];

$isPalindrome = isPalindrome($word);
$vowelCount = vowelCount($word);
$shiftedString = letterShift($word);

$_SESSION['results'] = [
    'isPalindrome' => $isPalindrome,
    'vowelCount' => $vowelCount,
    'shiftedString' => $shiftedString,
    'word' => $word,
];

#redirect
header('Location: index.php');