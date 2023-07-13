<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
</html>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="POST" autocomplete="off">
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
                    <button>Log in</button>
                    <div class="register">
                        <!-- <p>Entre como<a href="posts.php">Guest</a></p> -->
                        <p>Fazer <a href="formAdicionaUsuario.php">Registro</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>