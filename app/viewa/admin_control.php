        <div class="card-deck">
            <?php foreach ($array as $ar): ?>
            <div class="card" style="min-width: 18rem; margin-bottom: 2rem">
                <div class="card-body">
                    <h5 class="card-title"><?= $ar['titulo'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $ar['sub'] ?></h6>
                    <p class="card-text"><?= $ar['text'] ?></p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?= $ar['link_excluir'] ?>" role="button" class="btn btn-outline-danger">Excluir</a>
                        <?php if (isset($ar['link_aprovar'])): ?>
                            <a href="<?= $ar['link_aprovar'] ?>" role="button" class="btn btn-outline-success">Aprovar</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
</div>
