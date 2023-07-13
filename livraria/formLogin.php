<?php
    include('AV2-USGU/header.php');
?>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="POST">
                    <h2>Login</h2>
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
                    <div class="forget">
                      
                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Entre como<a href="posts.php">Guest</a></p>
                        <p>Fazer <a href="adicionaUsuario.php">Registro</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>