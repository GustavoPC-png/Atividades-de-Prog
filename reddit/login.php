<?php

    include("db.php");
        
    $sql = "SELECT * from usuario WHERE email = '{$_POST['login']}' and senha = '{$_POST['senha']}'";

    $resultado = $conexao->query($sql);

    $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);

    if(count($usuarios)==0){
        header("location: formAdicionaUsuario.html");
    }else {
        session_start();
        $_SESSION['id'] = $usuarios[0]['id'] ;
        $_SESSION['nome'] =  $usuarios[0]['nome'];
        header("location: posts.php");
    }

?>








