<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href=data: , rel=icon>
    <title>Document</title>
</head>

<body>
    <h1>Results</h1>
    <?php if ($correct) { ?>
    You are right!
    <?php } else {?>
    Nope, <a href="index.php">try again...</a>
    <?php } ?>
</body>

</html>