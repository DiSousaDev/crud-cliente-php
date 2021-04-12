<?php
// iniciando conexão
require_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM cliente WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Cliente</h3>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo$dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6">
                <input type="text" class="datepicker" name="data_nascimento" id="data_nascimento" value="<?php echo $dados['data_nascimento'];?>">
                <label for="data_nascimento">Data de Nascimento</label>
            </div>
            <div class="input-field col s6">
                <div class="input-field col s3">
                    <label>
                        <input class="with-gap" name="sexo" type="radio" value="Masculino" <?=$dados['sexo']=="Masculino" ? "checked" : ""?>>
                        <span>Masculino</span>
                    </label>
                </div>
                <div class="input-field col s3">
                    <label>
                        <input class="with-gap" name="sexo" type="radio" value="Feminino" <?=$dados['sexo']=="Feminino" ? "checked" : ""?>>
                        <span>Feminino</span>
                    </label>
                </div>
                <div class="input-field col s2">
                    <label>
                        <input class="with-gap" name="sexo" type="radio" value="Outro" <?=$dados['sexo']=="Outro" ? "checked" : ""?>>
                        <span>Outro</span>
                    </label>
                </div>
            </div>
            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>">
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s3">
                <input type="text" name="numero" id="numero" value="<?php echo $dados['numero'];?>">
                <label for="numero">Número</label>
            </div>
            <div class="input-field col s3">
                <input type="text" name="complemento" id="complemento" value="<?php echo $dados['complemento'];?>">
                <label for="complemento">Complemento</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro'];?>">
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade'];?>">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="estado" id="estado" value="<?php echo $dados['estado'];?>">
                <label for="estado">Estado</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="cep" id="cep" value="<?php echo $dados['cep'];?>">
                <label for="cep">Cep</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="celular" id="celular" value="<?php echo $dados['celular'];?>">
                <label for="celular">Celular</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $dados['email'];?>">
                <label for="email">E-mail</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>