<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Piadas</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <section>
        <div class="form-box">

                <?php

$conexao = new mysqli("localhost","root","","reddit");

$sql = "SELECT * from posts";

$resultado = $conexao->query($sql);

$posts = $resultado->fetch_all(MYSQLI_ASSOC);

    foreach($posts as $post){ ?>
        
        <div class='postagem'>
        
            <h2><?= $post['title']; ?></h2>
            <h4><?= $post['piada']; ?></h4>
            <input type='button' name='vote1' value='Upvote'>
            <input type='button' name='vote2' value='Downvote'>; 
        </div>;
    <?php } 
?>

        </div>
    </section>
        <footer>
            <p><a href='AdicionaPostagem.php'>Adicionar Postagem</a></p>
            <p><a href='AdicionaUsuario.php'></a></p>
            <p><a href='index.html'>Logout</a></p>
        </footer>    
</body>
</html>