<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href=data: , rel=icon>
    <title>Document</title>
</head>

<body>
    <h1>Results</h1>
    <p>You guessed: <?php echo $results['answer']; ?></p>
    <?php if ($results['correct']) { ?>
    You are right!
    <?php } else {?>
    Nope, <a href="index.php">try again...</a>
    <?php } ?>
</body>

</html>