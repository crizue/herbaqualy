<div class="content-wrapper">
    <div class="container-fluid">
        <!--meio-->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead">Pergunta por: <?= $pergunta['user']->getLoginUso() ?></p>
                        <h1 class="display-3"><?= $pergunta['pergunta'] ?></h1>
                        <p class="lead"><?= $pergunta['detalhamento_per'] ?></p>
                        <div class="row">
                            <div class="col-sm-8">
                                        <h4>
                                            Resposta <i class="fa fa-check" aria-hidden="true"></i> Por: <?= $resposta['user']->getLoginUso() ?>
                                        </h4>
                                        <p><?= $resposta['texto_res'] ?></p>
                                        <span class="likebtn-wrapper" data-identifier="item_1"></span>
                                        <!-- LikeBtn.com END -->
                            </div>
                            <div class="col-sm-4">
                                <img src="<?= $pergunta['foto'] ?>" style= "max-width: 10rem; max-height: 10rem" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-4">
                    <h5 class="card-header">Deixe um comentario:</h5>
                    <div class="card-body">
                        <form role="form" id="contact-form" class="contact-form" method="post" action="index.php?acao=comentar&id=<?= $_GET['id'] ?>">
                            <div class="form-group">
                                <textarea name="texto" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success" name="comentario">Enviar</button>
                        </form>
                    </div>
                </div>

                <?php foreach ($comentario as $coment): ?>
                    <!-- Single Comment -->
                    <div class="media mb-4">
                        <div class="media-body">
                            <h5 class="mt-0">User <?= $coment['usuario']->getLoginUso() ?></h5><?= $coment['texto_comen'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>