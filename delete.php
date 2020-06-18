<?php
$code = $_GET['code'];
require_once("conn.php");
$ps = $pdo->prepare("DELETE FROM etudiant where id=?");
$params = array($code);
$ps->execute($params);
header("location:etudiant.php");
