<?php
                                           //Pagina para editar os dados da BD
    if (!empty($_GET['id']))
    {
         //Conectar a base de dados
         include 'config.php';


         //Mostrar os dados na opção edit
         $id = $_GET['id'];
         $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
         $result = $conexao ->query($sqlSelect);
         
         if($result -> num_rows > 0)
         {
            while($user_data = mysqli_fetch_assoc($result))
            {
                
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $endereco = $user_data['endereco'];
            }  
         }
         else
         {
            header('Location: sistema.php');
         }      
    }
    else{
        header('Location: ../sistema.php');
     }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgtop3.png" />
    <title>Editando formulários</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            background-image: url(./img01/img09.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid #0b9735;
            border-radius: 10px;
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
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 16px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 14px;
            color: #0b9735;
        }
        #update{
            background-image: linear-gradient(to left,#24c415,#3aa120);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-image: linear-gradient(to right,#0f6113, #0c4d17);
        }
       
        .sistema{
            text-decoration: none;
            color: #fff;
            width: 230px;
            height: 40px;
            border-radius: 15px;
            background-color: #0b9735;
            font-size: 14px;
        }
        .sistema:hover{
           
            background-color: #0b9735;
        }

    </style>
</head>
<body>
<button class="sistema"><a href="sistema.php" class="sistema"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
</svg>&nbsp;&nbsp; Voltar  Sistema de Registros</a></button>
<br><br>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editando Formulário</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Password</label>
                </div>
                <br><br>
                <div class="inputBox">
                    
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                
                <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required> 
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" value="Actualizar">
            </fieldset>
        </form>
    </div>
</body>
</html>