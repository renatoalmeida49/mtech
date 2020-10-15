<div class="row justify-content-center feed-item">
 
    <div class="name-contact"><?php echo $contact['name']; ?> <?= $contact['lastname']; ?></div>
    <div class="description-contact"><?php echo $contact['description']; ?></div>
    <div class="button-contact">
        <a href="<?php echo BASE_URL; ?>admin/visualizar/<?php echo $contact['id']; ?>" class="btn btn-secondary" role="button">Visualizar</a>
    </div>  

</div>

<hr class="featurette-divider" />