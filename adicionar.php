<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h1 class="light">Novo Cliente</h1>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="e-mail" id="email">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn purple">Cadastrar</button>
            <a href="index.php" class="btn pink">Voltar</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>