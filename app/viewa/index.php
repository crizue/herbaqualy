<?php foreach ($array as $ar): ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!--meio-->
            <h1 class="lead">Perguntas</h1>
            <div class="card-deck">
                <div class="card">
                    <a href="index.php?acao=pergunta&id=<?= $ar['id_pergunta'] ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?= $ar['pergunta'] ?></h4>
                            <p class="card-text"><?= $ar['detalhamento_per'] ?></p>
                            <p class="card-text"><small class="text-muted"><?= $ar['data_hora'] ?> - <?= $ar['user']->getLoginUso() ?></small></p>
                        </div>
                    </a>
                    <img class="card-img-bottom" src="../../<?= $ar['foto'] ?>" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


