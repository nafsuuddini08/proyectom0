<?php
 require 'database.php'

 if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Se ha creado el usuario correctamnet';
      } else {
        $message = '#';
      }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title> 
	<link rel="stylesheet" href="registro.css">
</head>  
<body>
    <section class="form-login">
        <h5>Registrarse</h5>
        <input class="controls" type="text" name="Nombre de Usuario" value="" placeholder="Nombre de Usuario">
        <input class="controls" type="email" name="Email" value="" placeholder="Email">
        <input class="controls" type="password" name="Contraseña" value="" placeholder="Contraseña">
        <input class="controls" type="password" name="Confirmar Contraseña" value="" placeholder="Confirmar Contraseña">
        <input class="button" type="submit" name="" value="Listo">
        <p><a href="login.html">Iniciar Sesion</a></p>
    </section>
    <img src="logo_institut_poblenou_blanc.png" alt="logo">
</body>
</html>
