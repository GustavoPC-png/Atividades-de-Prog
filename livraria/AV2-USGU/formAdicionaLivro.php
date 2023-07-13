<?php

    include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="adicionaLivro.php" method="POST" autocomplete="off">
                    <h2>Livro</h2>
                    <div class="inputbox">
                        <input type="text" name="titulo" required>
                        <label for="">Título</label> 
                    </div>
                    <div class="inputbox">
                        <input type="number" name="ano" min="0" max="2023" required>
                        <label for="">Ano</label>
                    </div>
                    <div class="inputbox">
                        <select name="genero">
                            <option value="1">Terror</option>
                            <option value="2">Suspense</option>
                        </select>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="autores" required>
                        <label for="">Autor</label>
                    </div>
                        <button>Cadastra</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>