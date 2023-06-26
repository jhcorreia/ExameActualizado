<?php
session_start();
include 'config.php';
//print_r($_SESSION);
if((!isset($_SESSION['nome']) == true) & (!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    //Criando sessão
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
   
    header('Location: Login.php');
}
    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC  ";

    $result = $conexao -> query($sql);
    //print_r($result);

?>
    <!DOCTYPE html>
    <html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="shortcut icon" href="imgtop3.png" />
      <style>
             body{
            font-family: Arial, Helvetica, sans-serif;
            background:linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            background-image: url(./img01/img09.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            color:black;
            text-align: center;
            font-size: 1rem;
            }
            .table{
                text-decoration: none;
                background-color: black;
                border-radius: 5px;
            }

            .table-bg{
            background: rgba(0, 0, 0, 0.9); 
            }

            .navbar, .navbar-expand-lg ,.navbar-dark ,.bg-primary{
                background-color: #0b9735;
            }

            u{
                color: white;
                background-color: dodgerblue;
            }


        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a  class="navbar-brand" href="a">Sistema De Cadastro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targert="#navbarNav" aria-controls="navbarNav">
                    <span class="navnar-toggler.icon"></span>
                </button>
            </div>

            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
        </nav>
        <?php
            echo "<h1><br>Seja bem vindo <br> Usuário: <u>$logado</u></h1> ";
        ?>

    <!-- Mostrar os dados que estão na base de dados-->
        <div class="m-5">
            <table class="table text-white table-bg">
                <thead>
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">....</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Dados inseridos
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>" .$user_data['id']."</td>";
                            echo "<td>" .$user_data['nome']."</td>";
                            echo "<td>" .$user_data['email']."</td>";
                            echo "<td>" .$user_data['senha']."</td>";
                            echo "<td>" .$user_data['telefone']."</td>";
                            echo "<td>" .$user_data['sexo']."</td>";
                            echo "<td>" .$user_data['endereco']."</td>";
                            echo "<td>
                                
                                <a class ='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                </a>

                               <a class ='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                               <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                 <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z''/>
                               </svg>
                            </td>";
                            echo "</tr>";
                       
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    </html>
