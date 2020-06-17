<?php
require_once("conn.php");
$req = "SELECT * FROM etudiant";
$ps = $pdo->prepare($req);
$ps->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
</head>

<body>
    <?php require_once("entete.php") ?>
    <div class="col-lg-12 col-12 spacer">
        <div class="card text-info spacer">
            <div class="card-header"> Liste des étudiants </div>
            <div class="card-body">
                <table class="table table-striped table-dark table-hover">
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th> Nom</th>
                            <th> Email</th>
                            <th> photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($et = $ps->fetch()) { ?>
                            <tr>
                                <td><?php echo($et['id']) ?></td>
                                <td><?php echo($et['nom']) ?></td>
                                <td><?php echo($et['email']) ?></td>
                                <td> <img src="images/<?php echo($et['photo']) ?>" alt="" width="90" height="90"></td>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>