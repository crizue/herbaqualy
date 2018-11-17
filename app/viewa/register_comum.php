<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registro - HerbaQualy</title>
  <!-- Bootstrap core CSS-->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar</div>
      <div class="card-body">
        <form action="../controlador/index.php?acao=cadastrar&tipo=comum" method="post">
          <div class="form-group">
            <div class="form-row">
            <div class="form-group">
            <label for="exampleInputEmail1">nome</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="nome" placeholder="Nome" name="nome">
          </div>
          <div class="form-group">
            <div class="form-row">
            <div class="form-group">
            <label for="exampleInputEmail1">login</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="login" placeholder="login" name="login">
          </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="email" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Senha</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha" name="senha">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmar Senha</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirmar senha">
              </div>
            </div>
          </div>
          <button class="btn btn-success btn-block submit" name="gravar">Registrar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Página de login </a>
          <a class="d-block small" href="forgot-password.php">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
