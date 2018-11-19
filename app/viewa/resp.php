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
                            <div class="col-sm-4">
                                <img src="../../<?= $pergunta['foto'] ?>" style= "max-width: 10rem; max-height: 10rem" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-4">
                    <h5 class="card-header">Resposta:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>