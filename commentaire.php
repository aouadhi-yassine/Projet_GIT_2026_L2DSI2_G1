<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="commentaire.php" class="container mt-4">
        <fieldset>
            <H1>Vos commentaires</H1>
            <p>Aidez-nous à améliorer votre site :</p>
            <div class="mb-3"><label>Votre nom : </label> <input class="form-control" type="text" name="nom" placeholder="Ex: Van Gogh"></div>
            <div class="mb-3"><label>Vos commentaires : </label> <textarea class="form-control" name="commentaires" placeholder="Your website is very awesome!"></textarea></div>
            <div class="mb-3"><label>Votre adresse de courrier électronique : </label> <input class="form-control" type="text" name="adresse" placeholder="Rue 65 Hbib Borgiba el Gholi"></div>
            <div class="mb-3"><label>Indiquez les éléments du site que vous aimez :</label></div>
            <div class="mb-3">
                <input type="checkbox" value="Design du site" name="elementSite[]" class="form-input-check"> <label>Design du site</label>
                <input type="checkbox" value="Les liens" name="elementSite[]" class="form-input-check"> <label>Les liens</label>
                <input type="checkbox" value="Facilité de navigation" name="elementSite[]" class="form-input-check"> <label>Facilité de navigation</label>
                <input type="checkbox" value="Les images" name="elementSite[]" class="form-input-check"> <label>Les images</label>
            </div>
            <input class="btn btn-primary btn-sm" type="submit" value="Soumettre"><input class="btn btn-primary btn-sm" type="reset" value="Effacer">
        </fieldset>
        <?php
            if (isset($_POST['nom'])){
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
            }
        ?>
    </form>
</body>
</html>