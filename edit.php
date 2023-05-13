<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $area = $user_data['area'];
                $data = $user_data['data'];
                $empresa = $user_data['empresa'];
                $ip = $user_data['ip'];
                $ide = $user_data['ide'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
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
    <a href="sistema.php" style="text-decoration: none;"><< VOLTAR</a>
    <div class="box">
        <form action="SaveEdit.php"  method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>"  required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Área:</p>
                <input type="radio" id="comp" name="area" value="computador/notebook" <?php echo $area == 'computador/notebook' ? 'checked' : ''?> required>
                <label for="comp">Máquina PC/Notebook</label>
                <br>
                <input type="radio" id="internet" name="area" value="internet" <?php echo $area == 'internet' ? 'checked' : ''?> required>
                <label for="internet">Internet</label>
                <br>
                <input type="radio" id="outro" name="area" value="outras" <?php echo $area == 'outras' ? 'checked' : ''?> required>
                <label for="outro">Outra área</label>
                <br><br>
                <label for="data">Data do chamado:</label>
                <input type="date" name="data" id="data_chamado" value="<?php echo $data ?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="empresa" id="empresa" class="inputUser" value="<?php echo $empresa ?>" required>
                    <label for="empresa" class="labelInput">Empresa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ip" id="ip" class="inputUser" value="<?php echo $ip ?>" required>
                    <label for="ip" class="labelInput">IP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ide" id="ide" class="inputUser" value="<?php echo $ide ?>" required>
                    <label for="ide" class="labelInput">ID-MAQ</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit" value="Salvar alterações">
            </fieldset>
        </form>
    </div>
</body>
</html>