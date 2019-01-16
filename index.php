<?php
use App\Entity\Recette;
use App\EntityManager\RecetteManager;

require 'src/Lib/autoload.php';
require 'src/Lib/config.php';
require 'src/Lib/pdo.php';

$em = new RecetteManager();

$recette = $em->getRecetteDuJour();
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenue Sur Ecolorecettes</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="img-fluid rounded" src="images/ecolorecettes-header.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active badge badge-success">
                    <a class="nav-link" href="#">Recette du jour
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item badge badge-success">
                    <a class="nav-link" href="#">Recettes de saison</a>
                </li>
                <li class="nav-item badge badge-success">
                    <a class="nav-link" href="#">Recette au hasard</a>
                </li>
                <li class="nav-item badge badge-success">
                    <a class="nav-link" href="#">Lexique Cuisine</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="jumbotron bg-success m-2">
                <h1 class="text-white">Nouveau Concept!</h1>
                <p class="font-weight-bold text-white">Plus de goût...Moins de Carbone!</p>
            </div>

            <!-- Title -->
            <h1 class="mt-4 text-success">Recette du jour : <?php echo $recette->getTitre(); ?></h1>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="images/image-galette.jpg" alt="">

            <hr>
            <div class="container p-0">
                <div class="row p-0 m-0 text-center d-flex justify-content-around">
                    <div class="col-md-2 border m-0 ">
                        Temps de préparation <br>
                        <span class="text-success"><?php echo $recette->getTemps(); ?>mn</span>
                    </div>
                    <div class="col-md-2 border m-0 ">
                        Nombres de personnes <br>
                        <span class="text-success"><?php echo $recette->getPourCombien(); ?></span>
                    </div>
                    <div class="col-md-2 border m-0 ">
                        Difficulté <br>
                        <span class="text-success"><?php echo $recette->getDifficulte(); ?></span>
                    </div>
                    <div class="col-md-2 border m-0 ">
                        Prix <br>
                        <span class="text-success"><?php echo $recette->getPrix(); ?></span>
                    </div>
                    <div class="col-md-2 border m-0 ">
                        Coût Carbone <br>
                        <span class="text-success"><?php echo $recette->getEmpreinteCarbone(); ?></span>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Post Content -->
            <?php echo $recette->getDescription(); ?>

            <hr>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Recherchez une recette</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tapez ici votre recherche...">
                        <span class="input-group-btn">
                  <button class="ml-lg-1 btn bg-success text-white" type="button">Recherchez!</button>
                </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Recettes de saison</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-success" href="#">Hiver</a>
                                </li>
                                <li>
                                    <a class="text-success" href="#">Printemps</a>
                                </li>
                                <li>
                                    <a class="text-success" href="#">Eté</a>
                                </li>
                                <li>
                                    <a class="text-success" href="#">Hiver</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-success">
    <div class="container text-center">
        <p class="m-0 text-center text-white">Copyright &copy; M-R-P 2018</p>
        <img class="img-fluid rounded m-3 " src="images/ecolorecettes.png" alt="">

    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
