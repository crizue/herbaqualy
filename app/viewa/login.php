<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <!-- Bootstrap core CSS-->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="?acao=login" method="post">

          <div class="form-group">
            <label for="exampleInputLogin1">Login</label>
            <input class="form-control" id="exampleInputLogin1" type="text" placeholder="login" name="login">
          </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha" name="senha">
          </div>

            <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Lembrar Senha</label>
            </div>
          </div>
            <?php
            if (@$_GET['erro'] == 'loginInvalido'){?>
                <div class="error-text" style="color: red">Login incorreto. Por favor tente novamente</div>
            <?php } ?>

          <button class="btn btn-success btn-block submit" type="submit" name="gravar">Login</button>
        </form>
        <div class="text-center">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="?acao=logout">Registrar uma conta</a>
          <a class="d-block small" href="../controlador/index.php?acao=esqueceuSenha">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Cadastro Modal-->
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
                  <a class="btn btn-outline-info"    href="index.php?acao=cadastrar&tipo=biologo" >Biólogo</a>
                  <a class="btn btn-outline-success" href="index.php?acao=cadastrar&tipo=comum">Comum</a>
              </div>
          </div>
      </div>
  </div>
</body>

</html>
