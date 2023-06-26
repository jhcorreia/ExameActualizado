<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <link rel="stylesheet" href="./css/main.css">
    <style>
        main{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }
        .container-produtos{
            width: 100%;
            height: 293px;
            
        }
        .produtos{
            background-color: #e9ecea;
            border-radius: 15px;
            margin-left: 1%;
            margin-top: 6%;
        }

        .produtos-img{
            width: 200px;
            height: 200px;
            border-radius: 1rem;
        }

        .produtos-img:hover{
            transform: scale(0.8) translateY(-3px);
            cursor: pointer;
            transition: 0.3s;
        }

        .produtos-detalhes{
            text-align: center;
            background-color:#0b9735;
            color: #fff;
            padding: .5rem;
            margin-top: -2rem;
            border-radius: 1rem;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: .25rem;  
        }

        .botao-comprar {
            border: 0;
            background-color: #eebb15;
            padding: .4rem;
            text-transform: uppercase;
            border-radius: 2rem;
            cursor: pointer;
            border: 2px solid var(--clr-white);
            transition: background-color .2s, color .2s;
        }

        .botao-comprar a{
            color: #000;
        }

        .botao-comprar:hover{
            background-color: #b48b03;
        }

        .botao-comprar a:hover{
            color: #fff;
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
                        <a href="Home.php"><button  class="boton-menu boton-categoria ">
                            <i class="bi bi-house-fill"></i>Home</button></a>
                    </li>

                    <li>
                        <a href="##"><button  class="boton-menu boton-categoria active">
                            <i class="bi bi-bag-fill"></i>Produtos</button></a>
                    </li>

                    <li>
                        <a href="Login.php"><button  class="boton-menu boton-categoria">
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
                <?php
                    include 'config.php';
                    $resultado = mysqli_query($conexao,"select * from produto");
                    while ($f = mysqli_fetch_array($resultado)) {
                    ?>
                    <div class="container-produtos">
                        <div class="produtos">
                            <img class="produtos-img" src="./produtos/<?php echo $f['imagem'];?>"><br>
                            <div  class="produtos-detalhes">
                            <h3><?php echo $f['nome'];?></h3>
                            <span><?php echo $f['kg'];?> kg</span>
                            <span><?php echo $f['preco'];?> Akz</span>
                            <button class="botao-comprar"><a  href="./Carrinho.php?id=<?php echo $f['id'] ?>">Comprar</a></button>
                        </div>
                        </div>
                    </div>
                <?php
                    }
                ?>    
                    </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>