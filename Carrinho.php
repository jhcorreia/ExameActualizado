
<?php 
  session_start();
  include 'config.php';

  if (isset($_SESSION['Carrinho'])) {

  	
  	if (isset($_GET['id'])) {
  		
	    $arreglo = $_SESSION['Carrinho'];
	    $encontro = false;     
	    $numero = 0;

	   
	    for ($i=0; $i < count($arreglo) ; $i++) { 
	    	if ($arreglo[$i]['id'] == $_GET['id']) {
	    		$encontro = true;
	    		
	    		$numero = $i;
	    	}
	    }

	    if ($encontro) {
	    	$arreglo[$numero]['quantidade']++;
	    	$_SESSION['Carrinho'] = $arreglo;
	    }
        
        else{
        	$nome = "";
       	    $preco = 0;
       	    $imagem = "";
       	    $resultado = mysqli_query($conexao,"select * from produto where id =". $_GET['id']);
            
            while($resulset=mysqli_fetch_array($resultado)){
            	$nome = $resulset['nome'];
            	$preco = $resulset['preco'];
            	$imagem = $resulset['imagem'];
            }
           
            $nuevoproducto = array('id'=>$_GET['id'],
            	               'nome'=>$nome,
            	               'preco'=>$preco,
            	               'imagem'=>$imagem,
                               'quantidade'=>1);

            // metemos al objeto producto en el vector
            array_push($arreglo, $nuevoproducto);
            
            
            $_SESSION['Carrinho'] = $arreglo;
        }
  	}
	  	 

  	 
  }else{
    
       if (isset($_GET['id'])) {
       	    $nome = "";
       	    $preco = 0;
       	    $imagem = "";
       	    $resultado = mysqli_query($conexao,"select * from produto where id =". $_GET['id']);
            while($resulset=mysqli_fetch_array($resultado)){
            	$nome = $resulset['nome'];
            	$preco = $resulset['preco'];
            	$imagem = $resulset['imagem'];
            }
    
            $arreglo[] = array('id'=>$_GET['id'],
            	               'nome'=>$nome,
            	               'preco'=>$preco,
            	               'imagem'=>$imagem,
            	               'quantidade'=>1);
            $_SESSION['Carrinho'] = $arreglo;
       }

  }

 ?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <link rel="stylesheet" href="./css/Carrinho.css">
    <script type="text/javascript"  src="./js/script0.js"></script>

    <style>
        .carrinho-produtos{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--clr-gray);
            color: var(--clr-main);
            padding: .5rem;
            padding-right: 1.5rem;
            border-radius: 1rem;
            margin-bottom: 15px;
        }
        .carrinho-img{
            width: 4rem;
            border-radius: 1rem;
        }

        .eliminar{
            color: red;
        }
       
        .carrinho-eliminar{
            border: 0;
            background-color: transparent;
            color: var(--clr-red);
            cursor: pointer;
        }

        .total-compras{
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
                <ul>
                    <li>
                        <a class="boton-menu boton-volver" href="index.php">
                            <i class="bi bi-arrow-return-left"></i> Voltar Comprando
                        </a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito active" href="./Carrinho.php">
                            <i class="bi bi-cart-fill"></i> Carrinho
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© Copyright 2023</p>
            </footer>
        </aside>
        <main>
                    <section>
                    <?php  
                        $total = 0;
                        if (isset($_SESSION['Carrinho'])){
                            
                            $total = 0;
                            $datos = $_SESSION['Carrinho'];
                            
                            for ($i=0; $i < count($datos); $i++) { 
                    ?>     
                                <div >
                                    <section class="carrinho-produtos">
                                        <img class="carrinho-img" src="./produtos/<?php echo($datos[$i]['imagem']) ?>" alt=""><br>
                                        <span class="carrinho-titulo"><?php echo($datos[$i]['nome']) ?></span><br>
                                        <span class="carrinho-preco"> Preço:<?php echo "<br>"?> <?php echo($datos[$i]['preco']) ?> Akz</span><br>
                                        <span class="carrinho-quantidad">Quantidade:
                                        <?php echo "<br>"?>
                                            <input type="" value="<?php echo($datos[$i]['quantidade'])?>" size='2' data-preco="<?php echo($datos[$i]['preco']) ?>" data-id="<?php echo($datos[$i]['id']) ?>">
                                         kg</span><br>
                                        <span class="carrinho-subtotal">Subtotal:<?php echo "<br>"?><?php echo($datos[$i]['quantidade']*$datos[$i]['preco'])?> Akz</span>
                                        <button ><a href="##" class="eliminar" data-id="<?php echo($datos[$i]['id']) ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg></a>
                                        </button>
                                    </section>
                                </div>   	

                    <?php    
                                $total = $total + $datos[$i]['preco'] * $datos[$i]['quantidade'];    
                            }
                    
                        } // Mendagem de carrinho vazio
                        else{
                            echo "<div><h2>Seu carrinho de compras está vazio </h2></div><br>";
                        }
                        // Calculo total dos produtos comprados 
                        echo "<br><br><div><h2 class='total-compras' id='total'>Total Compra: " .$total. " Akz</h2></div><br>";
                    ?>	
                   	
                </section>
        </main>
    </div>
    
</body>
</html>