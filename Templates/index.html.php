<!-- Title -->
<h1 class="mt-4 text-success">Recette du jour : <?php echo $recette->getTitre(); ?></h1>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="<?php echo RACINE ;?>images/image-galette.jpg" alt="">

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

