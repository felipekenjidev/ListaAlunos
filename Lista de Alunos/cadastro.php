<?php
// Aceitar a Chamada somente se for Método GET
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: novo.html");
    exit;
}

// Receber os Parâmetros
$info["ra"] = $_POST["nmbRA"];
$info["nome"] = trim($_POST["txtNome"]);
$info["sexo"] = $_POST["ddlSexo"];
$info["idade"] = $_POST["nmbIdade"];
$info["endereco"] = trim($_POST["txtEndereco"]);
$info["telefone"] = trim($_POST["txtTelefone"]);
$info["email"] = trim($_POST["txtEmail"]);

// Registrar o Aluno no Arquivo
$arquivo = fopen("alunos.txt", "a");
fputcsv($arquivo, $info, ";");
fclose($arquivo);

// Retornar a Página de Cadastro
header("Location: novo.html");
exit;
?>