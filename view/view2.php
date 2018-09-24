<?php 
include'../modele/showTypes.php';
include'../controller/controller2.php';
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
        <div class="container-fluid">
            <div class="row">
                <?php include'../includeFilesPhp/nav.php' ?>
                <!--Deuxieme exercice-->
                <header class="offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1>2- Découvrez nos spectacles !</h1>
                    <p>Nous sommes ravis de vous accueillir au sein de notre théâtre !</br>
                        Voici ce que nous vous proposons au menu de ce soir !
                    </p>
                </header>
            </div>
            <div class="row">
                <section class="secondTest offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center p-0">
                    <ul class="listType m-0">
                        <!--Boucle foreach pour afficher les infos sous forme de liste-->
                        <?php foreach($showTypesList as $showTypesDetail){?>
                        <li><?= $showTypesDetail->type ?></li>
                        <?php } ?>
                    </ul>
                </section>
            </div>
        </div>
    </body>
</html>