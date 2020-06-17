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
    <div class=" container spacer col-md-6 col-12">
        <div class="card card-default">
            <div class="card-header">
                Saisie des Etudiants
            </div>
            <div class="card-body">
                <form method="post" action="SaveEtudiant.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label" for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control" placeholder="Entrer votre nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Email:</label>
                        <input type="text" name="email" id="" class="form-control" placeholder="Entrer votre email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Photo:</label>
                        <input type="file" name="photo" id="" class="form-control">
                    </div>
                    <div>
                        <button type="submit"> Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>