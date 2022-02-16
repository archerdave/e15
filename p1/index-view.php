<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href=data, rel=icon>
    <title>Project 1</title>
</head>

<body>
    <h1>Project 1</h1>
    <h2>Give me a word, I'll tell you if it's a palindrome, and how many vowels it has!</h2>
    <form method='POST' action='process.php' name='wordTools'>
        <label for='word'>Your word: </label>
        <input type='text' id='word' name='word' maxlength='250' autofocus placeholder='type your word here...'>
        <input type='submit' value='Tell me!'>
    </form>

    <?php if (isset($results)) { ?>
    <h2>aaaaaand here are your results!</h2>
    Your word, <em>"<?php echo $word;?>"</em>
    <?php echo $isPalindrome ? "is" : "is not";?> a palindrome, and
    it contains <?php echo $vowelCount;?> <?php echo $vowelCount == 1 ? "vowel" : "vowels";?>!
    <?php      } ?>

    <!-- <?php
    foreach ($palindromeTestStrings as $testString) {
        $result = isPalindrome($testString) ? "Yes" : "No";
        echo "Is ".$testString." a palindrome? ".$result."<br>";
    }?>

    <h2>And next... how many vowels are there?</h2>
    <?php
    foreach ($vowelCountTestStrings as $testString) {
        $result = vowelCount($testString);
        echo $testString." contains ".$result." vowels<br>";
    }?> -->


</body>

</html>