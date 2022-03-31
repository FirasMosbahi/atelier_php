<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sondage PHP</title>
</head>

<body>
    <div class="container">
        <h1>Evaluer le contenue de cour php pour le moment</h1>
        <form action="" method="POST">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="evaluation" value="bon" id="flexRadioDefault1" />
                <label class="form-check-label" for="evaluation"> Bon </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="evaluation" value="moyen" id="flexRadioDefault1" />
                <label class="form-check-label" for="evaluation"> Moyen </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="evaluation" value="mauvais" id="flexRadioDefault1" />
                <label class="form-check-label" for="evaluation"> Mauvais </label>
            </div>
            <br>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
        </form>
    </div>
    <br><br>
</body>

<?php

if (isset($_COOKIE["voted"]) && isset($_POST["submit"])) {
    $msg_error = "Vous avez déjà voté " . ucfirst($_COOKIE["voted"]);
?>
    <div class="alert alert-danger" role="alert"><?= $msg_error ?>
    </div>
<?php
} elseif (isset($_POST["evaluation"])) {
    setcookie("voted", $_POST["evaluation"], time() + 1200);
}
?>

</html>