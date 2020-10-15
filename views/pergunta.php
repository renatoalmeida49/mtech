<section>
    <div class="container part2">
        <div class="row feed-item">
            <div class="contact-name"><?= $pergunta['name'].' '.$pergunta['lastname']; ?></div>
            <div class="contact-description">Mensagem: <?= $pergunta['description']; ?></div>
            <div class="contact-email">E-mail: <?= $pergunta['email']; ?></div>
            <div class="contact-answer-area">
                <form method="POST">
                    <label for="resposta" class="sr-only">Sua resposta:</label>
                    <textarea id="resposta" name="resposta" placeholder="Digite aqui a resposta..." class="form-control" rows="10" cols="80"></textarea><br/>
                    <button class="btn btn-secondary btn-lg">Enviar resposta</button><br/><br/>
                </form>
            </div>

            <a href="<?= BASE_URL; ?>admin" class="btn btn-secondary btn-lg">Voltar</a>
        </div>
    </div>
</section>