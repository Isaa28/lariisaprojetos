<?php
require_once "conexao.php";

session_start();

if (isset($_POST["cnpj"], $_POST["senha"])) {
    $cnpj = trim($_POST["cnpj"]);
    $senha = trim($_POST["senha"]);

    if (empty($cnpj)) {
        echo "Preencha seu CNPJ";
    } elseif (empty($senha)) {
        echo "Preencha sua senha";
    } else {
        try {
            $stmt = $conexao->prepare("SELECT * FROM usuario WHERE cnpj = :cnpj");
            $stmt->bindParam(":cnpj", $cnpj, PDO::PARAM_STR);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                if (!isset($usuario["Senha"])) {
                    echo "Erro: campo 'Senha' não encontrado no banco de dados.";
                    exit();
                }

                if ($senha === $usuario["Senha"]) {
                    $_SESSION["id"] = $usuario["ID"];
                    $_SESSION["Nome_da_empresa"] = $usuario["Nome_da_empresa"];

                    header("Location: painel.php");
                    exit();
                } else {
                    echo "Senha incorreta.";
                }
            } else {
                echo "CNPJ não encontrado.";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>
