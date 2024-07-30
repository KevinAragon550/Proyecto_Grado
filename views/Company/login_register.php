<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_register</title>
<!--Tipografia de la pagina-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&family=Mulish:wght@400;700&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!--Conexion del css-->
    <link rel="stylesheet" href="assets/css/login_register.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
</head>
<body style="background-image: url(assets/Img/login_register.jpg);">
    <div class="inicio">
        <a href="views/Company/index.view.php">Inicio</a>
    </div>
<!--Caja trasera(lo que se muestra al otro lado del formulario)-->
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>     
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

<!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
<!--Login-->
                 <form action="#" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="correo" placeholder="Correo Electronico" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <button>Entrar</button>
                </form>
<!--Register-->
                <form action="../php/register.php" method="post" class="formulario__register" >
                    <h2>Regístrarse</h2>
                    <input type="text" maxlength="50" placeholder="Nombre" required>
                    <input type="text" maxlength="50" placeholder="Apellido" required>
                    <input type="email" maxlength="50" placeholder="Correo Electronico" required>
                    <input type="tel" maxlength="20" placeholder="Telefono" required>
                    <input type="text" maxlength="50" placeholder="Direccion" required>
                    <input type="password" maxlength="50" placeholder="Contraseña" required>
                    <input type="number" maxlength="1" min="1" max="2" placeholder="Rol: 1=Coordinador 2=Auxiliar" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
<!--Conexion de js-->
    <script src="assets/js/login_register.js"></script>
</body>
</html>