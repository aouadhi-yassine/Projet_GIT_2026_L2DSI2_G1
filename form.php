<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
    <H1>Formulaire</H1>
    <form action="form.php" method="post">
        <div class="mb-3">
            <input type="text" name="nom" id="" placeholder="Votre nom">
        </div>
        <div class="mb-3">
            <input type="text" name="age" id="" placeholder="Votre age">
        </div>
            <input class="btn btn-primary" type="submit" value="Envoyer">
    </form>

    <?php
        foreach ($_POST as $key => $value) {
            echo "$key :" . " $value<BR>";
        }
    ?>
<H1>you are virus mircosoft office: 78 564 156</H1>
    </div>
</body>
</html>