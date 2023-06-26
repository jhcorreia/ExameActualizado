<?php

    if (isset($_POST['submit']))
    {         
         //Conectar a base de dados com php
         include 'config.php';

        //Criar varisveis que estão na base de dados
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone =$_POST['telefone'];
        $sexo =$_POST['genero'];
        $endereco =$_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,endereco)
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$endereco')");
       
       //ALERTA SCRIPT
       echo"<script type='text/javascript'>alert('USUÁRIO CADASTRADO COM SUCESSO')</script>";
       header('refresh: 0; url=./formulario.php');  
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <link rel="stylesheet" href="./css/Login.css">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%,-50%);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            background-image: linear-gradient(
            rgba(113, 218, 15, 0.493), 
            rgba(228, 214, 15, 0.562));
            background-color:rgba(255, 255, 255, 0.486); 
            box-shadow:  0 4px 8px 0 rgba(10, 10, 10, 17), 0 50px 50px 0 rgba(0, 0, 0, 0.30);
   
        }
        fieldset{
            border: 3px solid #0b9735;
            border-radius: 11px;
        }
        legend{
            border: 1px solid #0b9735;
            padding: 10px;
            text-align: center;
            background-color: #0b9735;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
            left: 10px;
            width: 94%;
            color: black;
        }
        .inputB{
            position: relative;
            
        }
        
        .input{
            position: relative;
            left: 18px;
            color: black;
        }
        #submit{
        background-image: linear-gradient(to left,#24c415,#3aa120);
        width: 90%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        position: relative;
        left: 1.2rem;
        }
        #submit:hover{
            background-image: linear-gradient(to right,#0f6113, #0c4d17);
        }
        .fazer_login {
           margin-left: 8.5rem;
            color:#ea9c1e;
            background-color: #0b9735;
        }
        .fazer_login:hover{
            color: #24c415;
        }
        
    </style>
</head>
<body>

<div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">AgroVendas</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">AgroVendas</h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="Home.php"><button  class="boton-menu boton-categoria">
                            <i class="bi bi-house-fill"></i>Home</button></a>
                    </li>

                    <li>
                        <a href="index.php"><button  class="boton-menu boton-categoria ">
                            <i class="bi bi-bag-fill"></i>Produtos</button></a>
                    </li>

                    <li>
                        <a href="##"><button  class="boton-menu boton-categoria active">
                            <i class="bi bi-box-arrow-in-right"></i>Login</button></a>
                    </li>

                    <li>
                        <a href="Faleconosco.php"><button  class="boton-menu boton-categoria">
                            <i class="bi bi-info-circle-fill"></i>Fale conosco</button></a>
                    </li>

                    <li>
                        <a class="boton-menu boton-carrito" href="Carrinho.php">
                            <i class="bi bi-cart-fill"></i> Carrinho <span id="numerito" class="numerito">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© Copyright 2023</p>
            </footer>
        </aside>
        <main>
                <div class="box">
                    <form action="./formulario.php" method="POST">
                        <fieldset>
                            <legend><b>CADASTRO</b></legend>
                            <br>
                            <!----------- Input  Nome ------------>
                                <label  class="input">Nome:</label>
                                <input type="text" name="nome" id="nome" class="inputBox" required>
                            <br><br>
                            <!------------ Input  Email ------------>
                                <label  class="input">Email:</label>
                                <input type="text" name="email" id="email" class="inputBox" required> 
                            <br><br>
                            <!------------ Input  Password ------------>
                                <label class="input">Password:</label>
                                <input type="password" name="senha" id="senha" class="inputBox" required>
                            <br><br>
                            <!------------ Input  Telefone ------------>
                                <label class="input">Telefone:</label>
                                <input type="tel" name="telefone" id="telefone" class="inputBox" required>
                            <br><br>
                                <!------------ Input  Sexo ------------>
                            <p class="input">Sexo:</p>
                            <input type="radio" id="feminino" class="inputB" name="genero" value="feminino" required>
                            <label for="feminino" class="input">Feminino</label>
                            <br>
                            <input type="radio" id="masculino" class="inputB" name="genero" value="masculino" required>
                            <label for="masculino" class="input">Masculino</label>
                            <br><br>
                            <!------------ Input  Endereço ------------>
                            <label class="input">Endereço:</label>
                            <input type="text" name="endereco" id="endereco" class="inputBox" required>
                            <br><br>
                                <a  class="fazer_login" href="Login.php">&nbsp;&nbsp;&nbsp;Fazer Login &nbsp;&nbsp;&nbsp;</a>
                                <br><br>
                            <input type="submit" name="submit" id="submit" value="Cadastrar-se">
                            <br><br>
                        </fieldset>
                    </form>
                 </div>         
                </div>
            </main> 
</body>

</html>