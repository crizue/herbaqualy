<style>
    th{
        min-width: 8rem;
    }
</style>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Usuários:</th>
                    <th scope="col">Biólogos</th>
                    <th scope="col">Comuns</th>
                    <th scope="col">Aprovação;</th>
                    <th scope="col">Perguntas:</th>
                    <th scope="col">Perguntas Respondidas</th>
                    <th scope="col">Perguntas Sem Respostas;</th>
                    <th scope="col">Artigos</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="index.php?acao=admin&par=users"><?= $total_user ?>:</a></td>
                    <td><a href="index.php?acao=admin&par=bio"><?= $total_userbio ?></a></td>
                    <td><a href="index.php?acao=admin&par=comum"><?= $total_usercomum ?></a></td>
                    <td><a href="index.php?acao=admin&par=aprov"><?= $total_useraprov ?>;</a></td>
                    <td><a href="index.php?acao=admin&par=perg"><?= $total_pergunta ?>:</a></td>
                    <td><a href="index.php?acao=admin&par=resp"><?= $total_perguntaresp ?></a></td>
                    <td><a href="index.php?acao=admin&par=pergsresp"><?= $total_perguntasresp ?>;</a></td>
                    <td><a href="index.php?acao=admin&par=artigod">1</a></td>
                </tr>
                </tbody>
            </table>
        </div>

