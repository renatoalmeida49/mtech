<nav class="navbar navbar-expand-md fixed-top navbar-dark black">
    <a class="navbar-brand" href="<?= BASE_URL; ?>">MTech</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#modalContato" class="nav-link" data-toggle="modal" data-target="#modalContato"><?= $lang->get("CONTACT"); ?></a>
            </li>
            <li class="nav-item">
                <a href="#modalSobre" class="nav-link" data-toggle="modal" data-target="#modalSobre"><?= $lang->get("ABOUT"); ?></a>
            </li>

        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?= BASE_URL; ?>/?lang=pt-br" class="nav-link">
                    <img src="<?= BASE_URL; ?>/assets/images/br-flag.png" width="50"/>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL; ?>/?lang=en-us" class="nav-link">
                    <img src="<?= BASE_URL; ?>/assets/images/us-flag.png" width="50"/>
                </a>
            </li>
        </ul>
    </div>
</nav>