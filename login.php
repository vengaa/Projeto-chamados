<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Venga - Login</title>

	<style>
	body{
    background-color: #1B1F27;
    font-family: Arial, Helvetica, sans-serif;
    overflow: hidden; /* Ocultar a barra de rolagem */
}

.area-login {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    align-items: center;
}

.login {
    border-radius: 10px;
    background-color: #181920;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 355px;
    height: 320px;
    padding: 35px;
}

.login form {
    display: flex;
    flex-direction: column;
    width: 100%;    
}

.login input {
    background-color: #252A34;
    color: #CBD0F7;
    padding-left: 10px;
    border: none;
    outline: none;
    height: 45px;
    margin-top: 10px;
    border-radius: 8px;

}

.login img{
    width: 65px;
    height: auto;
}

.input::placeholder{
    color: #CBD0F7;
    font-size: 14px;
}

form [type="submit"] {
    display: block;
    background: transparent;
    border: 1px solid #5568FE;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;

}

form [type="submit"]:hover {
    display: block;
    transition: 1s;
    background-color: #5568FE;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    
}

p {
    color: #CBD0F7;
}

a {
    color: #5568FE;
    text-decoration: none;
}



	</style>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="assets/img/logo.png" alt="Logo.png">
            </div>

            <form action="testLogin.php" method="POST">
                <input type="text" name="email" placeholder="Digite o seu úsuario" autofocus required>
                <input type="password" name="senha" placeholder="Digite a sua senha" required>
                <input class="btn" name="submit" type="submit" value="Entrar">
		<p>Login de teste: TESTE senha: TESTE</p>
            </form>
            <p>Deseja abrir um novo chamado? <a href="formulario.php">Clique aqui</a></p>
        </div>
    </section>
    
</body>
</html>