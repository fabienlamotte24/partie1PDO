<?php
include'../modele/clients.php';
include'../controller/controller4.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../assets/css/styleView.css" />
        <link rel="stylesheet" href="../assets/css/styleNav.css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Exercice PDO</title>
    </head>
    <body>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 text-center">
                    <?php include'../includeFilesPhp/nav.php' ?>
                    <!--Premier exercice-->
                    <header class="offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h1>4 - Nos invités ayant la carte fidélité</h1>
                    </header>
                    <section class="firstTest offset-xl-3 offset-lg-3 offset-md-3 offset-sm-3 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-12 text-center">
                        <!--Création d'un tableau qui affichera les noms et prénoms des clients-->
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cardMembers as $Members) { ?>
                                    <tr>
                                        <td><?= $Members->lastName ?></td>
                                        <td><?= $Members->firstName ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>