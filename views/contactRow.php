<div class="row justify-content-center feed-item">
 
    <div class="name-contact"><?= $contact['name']; ?> <?= $contact['lastname']; ?></div>
    <div class="description-contact"><?= $contact['description']; ?></div>
    <div class="button-contact">
        <a href="<?= BASE_URL; ?>admin/visualizar/<?= $contact['id']; ?>" class="btn btn-primary" role="button">Visualizar</a>
    </div>  

</div>

<hr class="featurette-divider" />