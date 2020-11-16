<nav class="navbar navbar-expand-md fixed-top navbar-dark black">
    <a class="navbar-brand" href="<?= BASE_URL; ?>">MTech</a>
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
                <a href="<?= BASE_URL; ?>home/logout" class="nav-link button-login">Sair</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a href="<?= BASE_URL; ?>login" class="nav-link button-login">Login</a>
            </li>
            <?php endif; ?>

        </ul>
    </div>
</nav>