<?php
    session_start();
    session_unset();
    session_reset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h2>Inicio</h2>
    <form action="signin.php" method="post">
        <label for="">Correo</label>
        <input type="email" name="email" id="">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Ingresar">
    </form>
    <a href="signup.php">crear usuario</a>
</body>
</html>