<?php

/*
 * CRIANDO NOVO CONTATO 
 */
require_once 'conexao.php';
 
// pega os dados do formuário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : null;
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem))
{
    echo "Volte e preencha todos os campos";
    exit;
}

 
// insere no banco
$PDO = db_connect();

$sql = "INSERT INTO contato(nome, email, assunto, mensagem)
VALUES(:nome, :email, :assunto, :mensagem)";

$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':assunto', $assunto);
$stmt->bindParam(':mensagem', $mensagem);
 
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>