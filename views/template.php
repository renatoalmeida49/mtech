<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>MTech</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body class="bg-dark">
        <header>
			<nav class="navbar navbar-expand-md bg-dark fixed-top navbar-dark">
				<a class="navbar-brand" href="index.html">MTech</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="index.html" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="contato.html" class="nav-link">Contato</a>
						</li>
						<li class="nav-item">
							<a href="sobre.html" class="nav-link">Sobre</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        <footer>
			<div class="container part2">
				Todos os direitos reservados. 2020.
			</div>
		</footer>

		<hr class="featurette-divider">

		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="bootstrap.min.js"></script>
	</body>
</html>