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
        $mail = $_GET["mail"];
        $age = $_GET["age"];
        $strLength = strlen($name);
        $chiocciola = strpos($mail, '@');
        $ageIsNumber = is_numeric($age);
    ?>
    <p class="tit">Nome: </p>
    <p class="ris"><?php echo $name; ?></p>

    <p class="tit">Mail: </p>
    <p class="ris"><?php echo $mail; ?></p>

    <p class="tit">Età: </p>
    <p class="ris"><?php echo $age; ?></p>

    <?php
        $ok = "<h1> Accesso consentito</h1>";
        $ko = "<h1> Qualcosa non va nei dati inseriti</h1>";
        
        echo $strLength;
        echo $chiocciola;
        echo $ageIsNumber;


        if($strLength > 3 && $chiocciola > 0 && $ageIsNumber > 0){
            echo $ok;
        }else{
            echo $ko;
        }
    ?>


</body>
</html>