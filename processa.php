<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['telefone'])) {

$arquivo = __DIR__ . '/Login/dados.txt';
    
$Nome = $_POST['nome'];
$Email = $_POST['email'];
$Senha = $_POST['senha'];
$Telefone = $_POST['telefone'];

$linha = $_POST['email'] . ';' . $_POST['senha']. ';';

file_put_contents($arquivo, $linha, FILE_APPEND);

header('Location: Login/login.html');

} else
{
    echo "Por favor, preencha todos os campos.";
    header('Location: formulario.html');
    exit();
}
?>