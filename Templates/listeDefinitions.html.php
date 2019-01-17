<?php foreach($definitions as $definition) : ?>

    <div class="col-md-12">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="mb-0">
                    <a class="text-dark" href="<?php echo RACINE. 'definition/'.$definition->getId() ; ?>"><?php echo $definition->getTitre() ; ?></a>
                </h5>
                <p class="card-text mb-auto"><?php echo $definition->getContenu(); ?></p>
            </div>
            <?php if($definition->getImage()): ?>
            <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo RACINE_ASSETS . 'images/lexique/' .$definition->getImage() ; ?>" alt="<?php echo htmlspecialchars($definition->getTitre());?>">
            <?php endif ?>

        </div>
    </div>

<?php endforeach ?>

