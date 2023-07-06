<?php
    include('header.php');

    if(isset($_POST['title'])){
        $conexao = new mysqli("localhost","root","","reddit");

        $sql = "INSERT INTO posts (title,piada,usuario_id) 
        VALUES ('{$_POST['title']}','{$_POST['piada']}', {$_SESSION['id']})";
    
        $conexao->query($sql);
    
        header("location: posts.php");

        die();
    }
    

?>

    <form action="" method="post">
        Título: <input type="text" name="title" required>
        Piada: <input type="text" name="piada" minlength="10" required>
        
        <button>Create</button>
    </form>

<?php 

    include('footer.php'); 

?>