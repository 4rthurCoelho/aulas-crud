<?php
include_once 'includes/header.php';
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
                <tr>
                    <td>Matheus</td>
                    <td>Oliveira</td>
                    <td>matheusluisantoniooliveira-97@emayl.com</td>
                    <td>20</td>
                    <td><a href="" class="btn-floating purple"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating pink"><i class="material-icons">delete</i></a></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="" class="btn purple">Adicionar cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>