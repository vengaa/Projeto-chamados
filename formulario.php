<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $area = $_POST['area'];
        $data = $_POST['data'];
        $empresa = $_POST['empresa'];
        $ip = $_POST['ip'];
        $ide = $_POST['ide'];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,area,data,empresa,ip,ide) 
        VALUES ('$nome','$email','$telefone','$area','$data','$empresa','$ip','$ide')");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <title>Formulário</title>

</head>
<body>
    <a href="login.php" style="text-decoration: none;"><< VOLTAR</a>
    <div class="box">
        <form action="formulario.php"  method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Área:</p>
                <input type="radio" id="comp" name="area" value="computador/notebook" required>
                <label for="comp">Máquina PC/Notebook</label>
                <br>
                <input type="radio" id="internet" name="area" value="internet" required>
                <label for="internet">Internet</label>
                <br>
                <input type="radio" id="outro" name="area" value="outras" required>
                <label for="outro">Outra área</label>
                <br><br>
                <label for="data">Data do chamado:</label>
                <input type="date" name="data" id="data_chamado" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="empresa" id="empresa" class="inputUser" required>
                    <label for="empresa" class="labelInput">Empresa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ip" id="ip" class="inputUser" required>
                    <label for="ip" class="labelInput">IP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ide" id="ide" class="inputUser" required>
                    <label for="ide" class="labelInput">ID-MAQ</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>