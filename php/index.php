<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Oxigênio & Vida</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="main-container">
    <h1>Cadastro de Cliente</h1>
    <form id="register-form" method="POST">
        <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2"
                   data-email-validate>
        </div>
        <div class="half-box">
            <label for="cpf">CPF/CNPJ</label>
            <input type="cpf" name="cpf" id="cpf" placeholder="Digite seu CPF ou CNPJ" data-required
                   data-min-length="11" data-max-length="11">
        </div>
        <div class="full-box">
            <label for="name">Nome completo</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3"
                   data-max-length="16">
        </div>

        <div class="half-box spacing">
            <label for="contato">Telefone</label>
            <input type="tel" name="telefone" id="telefone" placeholder="Digite seu número de telefone"
                   data-required>
        </div>
        <div class="half-box">
            <label for="cep">CEP</label>
            <input type="cep" name="cep" id="cep" placeholder="Digite seu Cep" data-cep-validate data required>
        </div>
        <div class="half-box spacing">
            <label for="endereço">Logradouro</label>
            <input type="rua" name="rua" id="rua" placeholder="Digite o nome da sua Rua" data-cep-validate data
                   required>
        </div>
        <div class="half-box">
            <label for="numero">N°</label>
            <input type="numero" name="numero" id="numero" placeholder="Digite o número da sua casa">
        </div>
        <div class="half-box spacing">
            <label for="endereço">Estado</label>
            <input type="estado" name="estado" id="estado" placeholder="Digite o nome do seu Estado" data-cep-validate
                   data required>
        </div>
        <div class="half-box">
            <label for="endereço">Cidade</label>
            <input type="cidade" name="cidade" id="cidade" placeholder="Digite o nome da sua Cidade" data-cep-validate
                   data required>
        </div>
        <div>
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" id="agreement-label">Eu li e concordo com os <a href="Termos.html">Termos de Uso</a>.</label>
        </div>
        <?php

        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $name = $_POST["name"];
        $telefone = $_POST["telefone"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];


        echo "<script>alert('Dados enviados!);</script>";

        echo "<ul>
<li> Email: $email</li>
<li> CPF: $cpf</li>
<li> Nome: $name</li>
<li> Telefone: $telefone</li>
<li> CEP: $cep</li>
<li> Logradouro: $rua</li>
<li> Número: $numero</li>
<li> Estado: $estado</li>
<li> Cidade: $cidade</li>
</ul>";
        ?>
        <!D
        <div class="full-box">
            <input id="submit" type="submit" value="Registrar">
        </div>
    </form>
</div>
<p class="error-validation template"></p>
<script src="js/scripts.js"></script>
</body>
</html>