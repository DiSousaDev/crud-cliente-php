<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6">
                <input type="date" name="data_nascimento" id="data_nascimento">
                <label for="data_nascimento">Data de Nascimento</label>
            </div>
            <div class="input-field col s6">
                <div class="input-field col s3">
                    <label>
                        <input class="with-gap" name="sexo" type="radio" value="Masculino" checked />
                        <span>Masculino</span>
                    </label>
                </div>
                <div class="input-field col s3">
                    <label>
                        <input class="with-gap" name="sexo" type="radio" value="Feminino" />
                        <span>Feminino</span>
                    </label>
                </div>
                <div class="input-field col s2">
                    <label>
                        <input class="with-gap" name="sexo" type="radio" value="Outro" />
                        <span>Outro</span>
                    </label>
                </div>
            </div>
            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s3">
                <input type="text" name="numero" id="numero">
                <label for="numero">Número</label>
            </div>
            <div class="input-field col s3">
                <input type="text" name="complemento" id="complemento">
                <label for="complemento">Complemento</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="bairro" id="bairro">
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="estado" id="estado">
                <label for="estado">Estado</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cep" id="cep">
                <label for="cep">Cep</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="celular" id="celular">
                <label for="celular">Celular</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">E-mail</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>


<?php
include_once 'includes/footer.php';
?>