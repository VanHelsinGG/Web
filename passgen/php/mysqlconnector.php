<?php 
    include("logger.php");

    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "db_senhas";

    $mysql = mysqli_connect($hostname,$user,$password,$database);

    if(mysqli_connect_error()){
        echo "Erro ao conectar-se ao MySQL: " . mysqli_connect_errno();
        Logger("connection","Erro ao conectar-se ao banco:".mysqli_connect_errno());
        die();
    }else{
        Logger("connection","Conectado ao banco de dados");
    }

?>