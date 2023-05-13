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
                $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
                $resultDelete = $conexao->query($sqlDelete);
            }
        }
        else
        {
        }
    }

    header('Location: sistema.php');

?>

