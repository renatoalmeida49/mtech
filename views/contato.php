<section>
	<div class="container part2">

		<div class="py-5 text-center">
			<h2>Formulário de contato</h2>
		</div>

		<div class="row" style="justify-content: center;">
			<form method="POST">
				<div class="row">
					<div class="col-md-6">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" required />
					</div>
					<div class="col-md-6">
						<label for="sobrenome">Sobrenome</label>
						<input type="text" class="form-control" id="sobrenome" required />
					</div>
				</div>

				<div class="mb-3">
					<label for="email">E-mail</label>
					<input type="email" id="email" class="form-control" />
				</div>

				<div class="mb-4">
					<label for="descricao">Descreva o assunto:</label>
					<textarea id="descricao" class="form-control" rows="10" cols="80"></textarea>
				</div>

				<button class="btn-secondary btn">Enviar</button>
			</form>
		</div>
	</div>
</section>
        