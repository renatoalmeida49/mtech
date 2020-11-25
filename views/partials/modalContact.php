<div id="modalContato" class="modal fade">
    <div class="modal-dialog modal-dialog-centered part1">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header colorgray">
                    <h2><?= $lang->get("CONTACT"); ?></h2>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body colorgray">
                    <label for="nome"><?= $lang->get("NAME"); ?></label>
                    <input type="text" class="form-control" id="nome" name="nome" required />
                    <label for="sobrenome"><?= $lang->get("LASTNAME"); ?></label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" required />
                    <label for="email"><?= $lang->get("EMAIL"); ?></label>
                    <input type="email" id="email" name="email"class="form-control" />
                    <label for="pergunta"><?= $lang->get("SUBJECT"); ?></label>
                    <textarea id="pergunta" name="pergunta" class="form-control" rows="10" cols="80"></textarea>
                </div>
                <div class="modal-footer colorgray">
                    <button class="btn-secondary btn"><?= $lang->get("SUBMIT"); ?></button>
                    <button class="btn btn-secondary" data-dismiss="modal"><?= $lang->get("CLOSE"); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>