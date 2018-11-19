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
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>

                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">User 2552314</h5>muito bom, muito bom
                    </div>
                </div>

                <!-- Comment with nested comments -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">User 1233</h5>acho que ele esta errado
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>