<?php
                                      //Pagina para sair do Sistema de Registro
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: Login.php');

?>