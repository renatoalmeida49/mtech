<div id="modalSobre" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content part1">
            <div class="modal-header colorgray">
                <h2><?= $lang->get("TITLE"); ?></h2>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body colorgray">
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h5 class="featurette-heading marketing">
                            Anderson Azevedo
                        </h5>
                        <p class="lead">
                        <?= $lang->get("ANDERSON_AZEVEDO"); ?>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid rounded-circle" src="<?= BASE_URL; ?>assets/images/anderson.jpg" alt="" width="250" height="250">
                    </div>
                </div>
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h5 class="featurette-heading marketing">
                            Kátia Lins
                        </h5>
                        <p class="lead">
                        <?= $lang->get("KATIA_LINS"); ?>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid rounded-circle" src="<?= BASE_URL; ?>assets/images/katia-linux.png" alt="" width="250" height="250">
                    </div>
                </div>
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h5 class="featurette-heading marketing">
                            Renato Novaes
                        </h5>
                        <p class="lead">
                        <?= $lang->get("RENATO_NOVAES"); ?>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid rounded-circle" src="<?php echo BASE_URL; ?>assets/images/renato.jpg" alt="" width="250" height="250">
                    </div>
                </div>
            </div>
            <div class="modal-footer colorgray">
                <button class="btn btn-secondary" data-dismiss="modal"><?= $lang->get("CLOSE"); ?></button>
            </div>
        </div>
    </div>
</div>