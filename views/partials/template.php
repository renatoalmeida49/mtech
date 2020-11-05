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

						<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>
						<li class="nav-item">
							<a href="<?php echo BASE_URL; ?>home/logout" class="nav-link button-login">Sair</a>
						</li>
						<?php else: ?>
						<li class="nav-item">
							<a href="<?php echo BASE_URL; ?>login" class="nav-link button-login">Login</a>
						</li>
						<?php endif; ?>

					</ul>
				</div>
			</nav>
		</header>

		<?= $this->loadPartial('modalContact'); ?>

		<?= $this->loadPartial('modalAbout'); ?>

        <?= $this->loadViewInTemplate($viewName, $viewData); ?>

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