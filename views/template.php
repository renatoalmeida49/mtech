<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>MTech</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<link rel="icon" href="<?php echo BASE_URL; ?>assets/images/montagemorigin2.jpg" />
	</head>
	<body class="bg-dark">
        <header>
			<nav class="navbar navbar-expand-md fixed-top navbar-dark black">
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">MTech</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#modalContato" class="nav-link" data-toggle="modal" data-target="#modalContato">Contato</a>
						</li>
						<li class="nav-item">
							<a href="#modalSobre" class="nav-link" data-toggle="modal" data-target="#modalSobre">Sobre</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<div id="modalContato" class="modal fade">
			<div class="modal-dialog modal-dialog-centered part1">
				<div class="modal-content">
					<form method="POST">
						<div class="modal-header colorgray">
							<h2>Contato</h2>
							<button class="close" data-dismiss="modal"><span>&times;</span></button>
						</div>
						<div class="modal-body colorgray">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" required />
							<label for="sobrenome">Sobrenome</label>
							<input type="text" class="form-control" id="sobrenome" name="sobrenome" required />
							<label for="email">E-mail</label>
							<input type="email" id="email" name="email"class="form-control" />
							<label for="pergunta">Descreva o assunto:</label>
							<textarea id="pergunta" name="pergunta" class="form-control" rows="10" cols="80"></textarea>
						</div>
						<div class="modal-footer colorgray">
							<button class="btn-secondary btn">Enviar</button>
							<button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="modalSobre" class="modal fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content part1">
					<div class="modal-header colorgray">
						<h2>Sobre nós</h2>
						<button class="close" data-dismiss="modal"><span>&times;</span></button>
					</div>
					<div class="modal-body colorgray">
						<div class="row featurette">
							<div class="col-md-7">
								<h5 class="featurette-heading marketing">
									Anderson Azevedo
								</h5>
								<p class="lead">
									Mestre do hardware, domina tudo referente a manutenção de desktops. Perito em redes, não há serviço que não possa ser feito.
								</p>
							</div>
							<div class="col-md-5">
								<img class="featurette-image img-fluid rounded-circle" src="<?php echo BASE_URL; ?>assets/images/anderson.jpg" alt="" width="250" height="250">
							</div>
						</div>
						<hr class="featurette-divider">

						<div class="row featurette">
							<div class="col-md-7 order-md-2">
								<h5 class="featurette-heading marketing">
									Renato Novaes
								</h5>
								<p class="lead">
									Secretário do Anderson. Faz tudo que ele mandar no serviço.
								</p>
							</div>
							<div class="col-md-5">
								<img class="featurette-image img-fluid rounded-circle" src="<?php echo BASE_URL; ?>assets/images/renato.jpg" alt="" width="250" height="250">
							</div>
						</div>
					</div>
					<div class="modal-footer colorgray">
						<button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        <footer>
			<div class="container part2">
				Todos os direitos reservados. 2020.
			</div>
		</footer>

		<hr class="featurette-divider">

		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>