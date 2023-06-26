<?php
                                   //Pagina para Editar e salvar os dados da BD
include 'config.php';

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];

    $sqlUpdate = "UPDATE usuarios SET nome= '$nome', email = '$email', senha = '$senha', telefone = '$telefone', sexo = '$sexo', endereco = '$endereco'
     WHERE  id = '$id'";     
     
     $result = $conexao -> query($sqlUpdate);
}
header('Location: sistema.php'); 
?>