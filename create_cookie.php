<?php
    if (isset($_POST['cor'])) {
        setcookie("cordefundo", $_POST['cor'],time() +120);
    }
?>

<html>
    <head>
    </head>
    <body>
        <h3>Cookie Criado com sucesso!</h3>
        <a href="form.php">Voltar ao formulário</a>
    </body>