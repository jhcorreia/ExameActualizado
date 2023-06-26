<?php
                                  //Pagina de Login caso não esta cadastrado
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //Acessa
    //Ligar com base de dados
    include 'config.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";

    $result = $conexao -> query($sql);

    if(mysqli_num_rows($result) < 1)
    {
        //Não existe no banco de dados    
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo"<script type='text/javascript'>alert('Não está Cadastrado... Vá fazer o Cadastro ')</script>";
		header('refresh: 0; url=formulario.php');   
    
    }
    else
    {
        //Exestir no banco de dados
        //Direcionar para pagina
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
   
}
else{
    //Não acesso
    header('Location: Login.php');
   
}

?>