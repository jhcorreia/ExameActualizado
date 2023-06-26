<?php

    //Nome do Servidor Localhost
    $dbHost = '127.0.0.1:3306';

    //Nome do Usuario  Server
    $dbUsername = 'root';

    //Password do Servidor
    $dbPassword = '1234567890';

    //Nome da Base de Dados
    $dbName = 'agrovendas';

    //Conexão do Servidor MySQL
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
?>