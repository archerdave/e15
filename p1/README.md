# Project 1
+ By: David Harvill
+ URL: <http://e15p1.dharvill.me>

## Outside resources
N/A

## Notes for instructor
Neither the palindrome checker nor the vowel counter are configured to recognized accented charcters.

The function `nextChar($string)`, a utility function for `letterShift($string)`, works as it does due to the following note in the [PHP documentation](https://www.php.net/manual/en/language.operators.increment.php#language.operators.increment).
```
PHP follows Perl's convention when dealing with arithmetic operations on character variables and not C's. For example, in PHP and Perl $a = 'Z'; $a++; turns $a into 'AA', while in C a = 'Z'; a++; turns a into '[' (ASCII value of 'Z' is 90, ASCII value of '[' is 91). Note that character variables can be incremented but not decremented and even so only plain ASCII alphabets and digits (a-z, A-Z and 0-9) are supported. Incrementing/decrementing other character variables has no effect, the original string is unchanged.
```
