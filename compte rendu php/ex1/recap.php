<?php

/*       controle des injections        */
$_POST["nom"] = htmlentities($_POST["nom"]);
$_POST["prenom"] = htmlentities($_POST["prenom"]);
$_POST["adresse"] = htmlentities($_POST["adresse"]);
$_POST["nbre"] = htmlentities($_POST["nbre"]);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nombre = $_POST['nbre'];
$adresse = $_POST['adresse'];
$type = $_POST['type'];
$add_salade = $_POST['add_salade'];
$add_harissa = $_POST['add_harissa'];
$add_mayo = $_POST['add_mayo'];

function price($number)
{
    if ($number > 10)
        return ($number * 4);
    else
        return (($number * 4) * 0.9);
}


echo "Bonjour monsieur " . $nom . " " . $prenom . "<br> vous avez commandee " . $nombre . "sandwitches de " . $type . "avec une addition de " . $add_harissa . " " . $add_salade . " " . $add_mayo;

echo "<br> le prix de votre commande est " . price($nombre);

$target_dir = "imgs";
$name = uniqid(rand(), true) . '.png';
move_uploaded_file($_FILES["cin"]["tmp_name"], "$target_dir/$name");
?>