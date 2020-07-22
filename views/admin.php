<section>
    <div class="container part2">
        <h2>Solicitações de contatos</h2><br/><br/>

        <?php foreach ($contatos as $contato): ?>

        <div class="row">
            <div class="col">
                <h3><?php echo $contato['nome']; ?></h3>
                <p><?php echo $contato['pergunta']; ?></p>
                <p><a href="<?php echo BASE_URL; ?>admin/visualizar/<?php echo $contato['id']; ?>" class="btn btn-secondary" role="button">Visualizar</a></p>
            </div>
        </div>

        <hr class="featurette-divider" />

        <?php endforeach; ?>

        <?php echo $_SESSION['id']; ?> 
</section>