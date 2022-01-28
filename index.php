<?php
//conexão
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h1 class="light">Clientes</h1>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E-mail:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?>-97@emayl.com</td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="" class="btn-floating purple"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating pink"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn purple">Adicionar cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>