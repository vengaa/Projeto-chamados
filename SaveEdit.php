<?php 

include_once('config.php');


    if(isset($_POST['update'])) {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $area = $_POST['area'];
        $data = $_POST['data'];
        $empresa = $_POST['empresa'];
        $ip = $_POST['ip'];
        $ide = $_POST['ide'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone', area='$area', data='$data', empresa='$empresa', ip='$ip', ide='$ide' WHERE id='$id'";
        
        $result = $conexao->query($sqlUpdate);
  
    }

    header('Location: sistema.php');

?>

