<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>MTech</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css" />
		<link rel="icon" href="<?= BASE_URL; ?>assets/images/montagemorigin2.jpg" />
	</head>
	<body class="bg-dark">
        <header>
			<?= $this->loadPartial('navbar', $viewData); ?>
		</header>

		<?= $this->loadPartial('modalContact', $viewData); ?>

		<?= $this->loadPartial('modalAbout', $viewData); ?>

        <?= $this->loadViewInTemplate($viewName, $viewData); ?>

        <?= $this->loadPartial('footer', $viewData); ?>

		<hr class="featurette-divider">

		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>