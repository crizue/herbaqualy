<body class="fixed-nav sticky-footer" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.php">
            Herbaqualy
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                    <a class="nav-link" href="index.php?acao=index">
                        <i class="fa fa-bars"></i>
                        <span class="nav-link-text">Inicio</span>
                    </a>
                </li>
                <?php if (isset($_SESSION['id_user'])): ?>
                    <?php if ($_SESSION['id_tip_user'] == 1): ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                        <a class="nav-link" href="index.php?acao=admin">
                            <i class="fa fa-bars"></i>
                            <span class="nav-link-text">Admin</span>
                        </a>
                    </li>
                    <?php elseif ($_SESSION['id_tip_user'] == 3): ?>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                            <a class="nav-link" href="index.php?acao=criar_artigo">
                                <i class="fa fa-bars"></i>
                                <span class="nav-link-text">Criar Artigo</span>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                            <a class="nav-link" href="index.php?acao=resposta">
                                <i class="fa fa-bars"></i>
                                <span class="nav-link-text">Responder Perguntas</span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                    <a class="nav-link" href="index.php?acao=perguntas">
                        <i class="fa fa-bars"></i>
                        <span class="nav-link-text">Perguntas</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biblioteca">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                        <i class="fa fa-university"></i>
                        <span class="nav-link-text">Artigos</span>
                    </a>
                </li>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right">
                        <a class="nav-link" href="index.php?acao=plantas">
                            <span class="nav-link-text black-text">Plantas para chás</span>
                        </a>
                    </li>
                    <li  class="nav-item" data-toggle="tooltip" data-placement="right">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2"  data-parent="#exampleAccordion">
                            <span class="nav-link-text">Categorias</span>
                        </a>
                    </li>
                    <ul class="sidenav-third-level collapse" id="collapseMulti2">
                        <li>
                            <a href="index.php?acao=planta&tipo=verduras">Verduras</a>
                        </li>
                        <li>
                            <a href="index.php?acao=planta&tipo=oleaginosas">Oleaginosas</a>
                        </li>
                        <li>
                            <a href="index.php?acao=planta&tipo=vegetais">Vegetais</a>
                        </li>
                    </ul>
                </ul>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Procurar por">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>

                <li class="nav-item">
                    <?php if (isset($_SESSION['id_user'])): ?>
                        <?php if ($_SESSION['id_tip_user'] < 3): ?>
                            <a class="nav-link" href="index.php?acao=perguntar">Criar pergunta</a>
                        <?php else: ?>
                            <a class="nav-link" href="index.php?acao=resposta">Responder pergunta</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['id_user'])){ ?>
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="?acao=logout">
                            <i class="fa fa-fw fa-sign-out"></i>
                            Logout
                        </a>
                    <?php }else{ ?>
                        <a class="nav-link" href="index.php?acao=login">
                            <i class="fa fa-fw fa-sign-in"></i>
                            Logar
                        </a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>

<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecione "Logout" para sair de sua sessão atual</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-outline-success" href="index.php?acao=logout">Logout</a>
            </div>
        </div>
    </div>
</div>