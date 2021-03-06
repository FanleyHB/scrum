<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenue Sur Ecolorecettes</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo RACINE ;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo RACINE ;?>css/blog-post.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="img-fluid rounded" src="<?php echo RACINE ;?>images/ecolorecettes-header.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active badge badge-success">
                    <a class="nav-link" href="<?php echo RACINE ;?>">Recette du jour
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
                    <a class="nav-link" href="<?php echo RACINE ;?>definition">Lexique Cuisine</a>
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
                <h1 class="text-white font-weight-bold">Nouveau Concept!</h1>
                <p class="font-weight-bold text-white">Plus de goût...Moins de Carbone!</p>
            </div>

            <?php echo $buffer?>

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
        <img class="img-fluid rounded m-3 " src="<?php echo RACINE ;?>images/ecolorecettes.png" alt="">

    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo RACINE ;?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo RACINE ;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>