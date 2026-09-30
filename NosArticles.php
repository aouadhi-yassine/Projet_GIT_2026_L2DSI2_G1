<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $articles = ["Imprimante", "Tablette", "Câbles HDMI", "Stylet"];
    ?>
    <ul>
    <?php
    foreach ($articles as $value) {
        ?>
        <li><?= $value ?></li>
        <?php
    }
    ?>
    </ul>
</body>
</html>