<div class="detail_article">
    <h1><?php echo $definition->getTitre() ; ?></h1>
    <p><?php echo $definition->getContenu() ; ?></p>
    <?php if($definition->getImage()): ?>
        <img class="img_article" src="<?php echo RACINE_ASSETS . 'images/lexique/'.$definition->getImage() ; ?>" alt="<?php echo htmlspecialchars($definition->getTitre()) ?>">
    <?php endif ?>
</div>


