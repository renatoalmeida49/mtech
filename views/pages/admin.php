<section>
    <div class="container part2">
        <h2>Solicitações de contatos</h2><br/><br/>

        <?php foreach ($contacts as $contact): ?>

            <?php $this->loadPartial('contactRow', ['contact' => $contact]); ?>

        <?php endforeach; ?>
</section>