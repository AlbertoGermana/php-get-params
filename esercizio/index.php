<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpSnack</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name = $_GET["name"];
        $surname = $_GET["surname"];
    ?>
    <h1>
        <?php echo 'Hello '. $name . " " . $surname . "!";?>
    </h1>

</body>
</html>