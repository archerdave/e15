<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
</head>

<body>

    <form method='GET' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if(isset($correct)) { ?>
    <h1>Results</h1>
    <p>You guessed: <?php echo $answer; ?></p>
    <?php if ($correct) { ?>
    You are right!
    <?php } else {?>
    Nope, <a href="index.php">try again...</a>
    <?php } }?>

</body>

</html>