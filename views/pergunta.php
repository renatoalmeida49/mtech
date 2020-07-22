<section>
    <div class="container part2">
        <h2><?php echo $pergunta['nome']; ?></h2>
        <p><?php echo $pergunta['pergunta']; ?></p>
        <p><?php echo $pergunta['email']; ?></p>
        <form method="POST" class="form-resposta">
            <label for="resposta">Sua resposta:</label>
            <textarea id="resposta" name="resposta" class="form-control" rows="10" cols="80"></textarea><br/>
            <button class="btn btn-secondary btn-lg">Enviar resposta</button><br/><br/>
        </form>

        <a href="<?php echo BASE_URL; ?>admin" class="btn btn-secondary btn-lg">Voltar</a>
    </div>
</section>