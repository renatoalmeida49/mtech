<section id="part1">
    <div class="container-fluid bg-dark">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="" src="<?= BASE_URL; ?>assets/images/montagemorigin2.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-center">
                                <h1><?= $lang->get('MAINTANCE_OF_COMPUTERS'); ?></h1>
                                <p><?= $lang->get('MAINTANCE_DESCRIPTION'); ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="<?= BASE_URL; ?>assets/images/newRede2.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption text-center">
                                <h1><?= $lang->get('NETWORK_SERVICES'); ?></h1>
                                <p><?= $lang->get('NETWORK_DESCRIPTION'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="<?= BASE_URL; ?>assets/images/development2.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1 style="font-size: 1.9rem; text-align: center;"><?= $lang->get('WEB_DEVELOPMENT'); ?></h1>
                                <p><?= $lang->get('WEB_DESCRIPTION'); ?></p>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="featurette-divider">

<section>
    <div class="container-fluid bg-dark">
        <div class="container part2">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                <img class="rounded-circle" src="<?= BASE_URL; ?>assets/images/montagemorigin.jpg" width="140" height="140"/>
                    <h2><?= $lang->get('MAINTANCE'); ?></h2>
                    <p><?= $lang->get('MAINTANCE_RESUMED'); ?>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= BASE_URL; ?>assets/images/newRede.jpg" width="140" height="140"/>
                    <h2><?= $lang->get('NETWORK'); ?></h2>
                    <p><?= $lang->get('NETWORK_RESUMED'); ?></p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= BASE_URL; ?>assets/images/development.jpg" width="140" height="140"/>
                    <h2><?= $lang->get('WEB'); ?> WEB</h2>
                    <p><?= $lang->get('WEB_RESUMED'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="featurette-divider">