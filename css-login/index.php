<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="tela-de-login">
        <div id="login">
            <h1>Login</h1>
            <form action="login.php" method="post">
            <label class="rotulo" for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" class="estilo-input" placeholder="Ex: 01.234.567/0001-89">
            <label class="rotulo" for="senha">Senha:</label>
            <input type="password" name="senha" class="estilo-input" placeholder="Ex: MinhaSenha123!">
            <input type="submit" value="Entrar" class="botoes">
            </form>
            <div id="div-link">
            <p>Não tem conta?<a id="link-cadastro" href="#">Cadastre-se</a></p>  
            </div>
        </div>
        <div id="imagem-lateral">
            <img id="imagem-login" src="assets/imagens/imagem-login.png" alt="">
            <div>
                <img id="logo" src="assets/imagens/logo.png" alt="Logo Astok">
            </div>
        </div>
    </div>
</body>
</html>