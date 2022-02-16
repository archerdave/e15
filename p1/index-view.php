<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href=data, rel=icon>
    <title>Project 1</title>
</head>

<body>
    <h1>Project 1</h1>
    <h2>Give me a word!</h2>
    <p>I'll tell you if it's a palindrome, how many vowels it has, and the resulting letter-shifted
        word is!</p>
    <form method='POST' action='process.php' name='wordTools'>
        <label for='word'>Your word: </label>
        <input type='text' id='word' name='word' maxlength='250' autofocus placeholder='type your word here...'>
        <input type='submit' value='Tell me!'>
    </form>

    <?php if (isset($results)) { ?>
    <h2>aaaaaand here are your results!</h2>
    <p>Your word, <em>"<?php echo $word;?>"</em>...</p>
    <ul>

        <li><?php echo $isPalindrome ? "Is" : "Is not";?> a palindrome!</li>
        <li>Contains <?php echo $vowelCount;?> <?php echo $vowelCount == 1 ? "vowel" : "vowels";?>!</li>
        <li>Lettershifts to <strong><?php echo $shiftedString;?></strong></li>
        <?php      } ?>



</body>

</html>