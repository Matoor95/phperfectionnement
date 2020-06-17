<?php
//connexion a la bas de donnees
require_once("conn.php");
$nom = $_POST['nom'];
$email = $_POST['email'];
$photoName = $_FILES['photo']['name'];
$fichierTempo = $_FILES['photo']['name'];
move_uploaded_file($fichierTempo, './images/' . $photoName);
$ps = $pdo->prepare("INSERT INTO etudiant(nom,email,photo) VALUES(?,?,?)");
$params = array($nom, $email, $photoName);
$ps->execute($params);
header("location:etudiant.php");
