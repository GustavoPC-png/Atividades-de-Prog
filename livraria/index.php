<?php
session_start();
if(!isset($_SESSION['id'])){
        header("location: formLogin.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href='index.php?genero=all'>Todos</a>
    <a href='index.php?genero=1'>Terror</a>
    <a href='index.php?genero=2'>Suspense</a>
    <hr>
    <?php

    $conexao = new mysqli("localhost","root","","livraria");
    
    $sql = "SELECT * from livros where idUsuario = {$_SESSION['id']}";

    if(isset($_GET['genero'])){
        if($_GET['genero']==1){
            $sql = "SELECT * from livros WHERE genero = 1 and idUsuario = {$_SESSION['id']}";
        }else if($_GET['genero']==2){
            $sql = "SELECT * from livros WHERE genero = 2 and idUsuario = {$_SESSION['id']}";
        }else{
            $sql = "SELECT * from livros WHERE idUsuario = {$_SESSION['id']}";
        }
    }

    $resultado = $conexao->query($sql);

    $livros = $resultado->fetch_all(MYSQLI_ASSOC);

    foreach($livros as $livro){
        echo "Título: ".$livro['titulo'];
        echo "<br>";
        echo "Ano: ".$livro['ano'];
        echo "<br>";
        $generos= array(1=>"Terror", 2=>"Suspense");
        echo "Genero: ".$generos[$livro['genero']];
        echo "<br>";
        echo "Autores(as): ".$livro['autores'];
        echo "<br>";
        echo "<a href='deleta.php?id={$livro['id']}'>Excluir</a>";
        echo " - ";
        echo "<a href='formEdita.php?id={$livro['id']}'>Editar</a>";
        echo "<hr>";
    }
    ?>    
    <a href='formAdiciona.php'>Adiciona livro</a>
    <a href='formAdicionaUsuario.html'>Adiciona Usuario</a>
    <a href='logout.php'>Logout</a>
</body>
</html>





