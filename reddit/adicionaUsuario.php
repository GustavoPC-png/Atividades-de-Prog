<?php
    include('header.php');
    if(isset($_POST['nome'])) {

        $login = $_POST['login'];
        if($login.length() == 0)


        $sql = "INSERT INTO usuario (nome,email,senha) 
        VALUES ('{$_POST['nome']}','{$_POST['login']}','{$_POST['senha']}')";

        $conexao->query($sql);

        header("location: index.php");
        die();
    }
    
?>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="adicionaUsuario.php" method="post">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <input type="text" name="nome" required>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="login" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="senha" required>
                        <label for="">Password</label>
                    </div>
                    <button>Register</button>
                    
                </form>
            </div>
        </div>
    </section>

<?php

include('footer.php');

?>