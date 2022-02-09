<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href=data, rel=icon>
    <title>Project 1</title>
</head>

<body>
    <h1>Project 1</h1>
    <h2>First up... palindrome testing!</h2>
    <?php
    foreach ($palindromeTestStrings as $testString) {
        $result = isPalindrome($testString) ? "Yes" : "No";
        echo "Is ".$testString." a palindrome? ".$result."<br>";
    }?>

    <h2>And next... how many vowels are there?</h2>
    <?php
    foreach ($vowelCountTestStrings as $testString) {
        $result = vowelCount($testString);
        echo $testString." contains ".$result." vowels<br>";
    }?>


</body>

</html>