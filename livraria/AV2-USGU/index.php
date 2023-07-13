<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top">
        <a href='index.php?genero=1'>Terror</a>
        <a href='index.php?genero=all'>Todos</a>
        <a href='index.php?genero=2'>Suspense</a>
    </div>  
    <?php
    $conexao = new mysqli("localhost","root","","livraria");
    
    $sql = "SELECT * FROM livros WHERE idUsuario = {$_SESSION['id']}";

    $resultado = $conexao->query($sql);

    $livros = $resultado->fetch_all(MYSQLI_ASSOC);

    if(!count($livros)==0) {
        ?>
        <div class="space"><br><br><br>
            <hr>
        </div>
        <?php
    }

    ?>

    
        
    

    <?php

    
    if(isset($_GET['genero'])){
        if($_GET['genero']==1){
            $sql = "SELECT * FROM livros WHERE genero = 1 and idUsuario = {$_SESSION['id']}";
        }else if($_GET['genero']==2){
            $sql = "SELECT * FROM livros WHERE genero = 2 and idUsuario = {$_SESSION['id']}";
        }else{
            $sql = "SELECT * FROM livros WHERE idUsuario = {$_SESSION['id']}";
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
        echo "<a href='delete.php?id={$livro['id']}'>Excluir</a>";
        echo " - ";
        echo "<a href='formEdit.php?id={$livro['id']}'>Editar</a>";
        echo "<hr>";
    }
    ?>  
    <div class="bottom">
        <a href='formAdicionaLivro.php'>Adiciona livro</a>
        <!-- <a href='formAdicionaUsuario.php'>Adiciona Usuario</a> -->
        <a href='logout.php'>Logout</a>
    </div>  
</body>
</html>