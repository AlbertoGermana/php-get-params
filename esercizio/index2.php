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
        $mail = $_GET["mail"];
        $hasDot = strpos($mail, '.');
        $hasAt = strpos($mail, '@');
        $ok = "<div class='check'><h1>Mail scritta correttamente</h1></div>";
        $ko = "<div class='check'><h1>Mail errata</h1></div>";
        $print = "<div class='check'></div>";

        if($hasDot && $hasAt){
            $print = $ok;
        }else{
            $print = $ko;
        }
    ?>

    <div class="container">
        <?php echo $print; ?>
    </div>


</body>
</html>