<!DOCTYPE html>
    <!--Idioma de la pagina-->
    <html lang="es">
    <head>
        <!-- Arregla caracteres especiales -->
        <meta charset="utf-8">
        <!-- Hace que la pagina web sea responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Hace que sea compatible con navegadores antiguos -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- El titulo de la pagina web en la parte superior -->
        <title>Control de Refrigerios</title>
        <script src="https://kit.fontawesome.com/283335a286.js" crossorigin="anonymous"></script>
        <!-- Tipografia de la pagina web -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&family=Mulish:wght@400;700&display=swap"
            rel="stylesheet">
        <!-- Conecta nuestro HTML con el css -->
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="assets/css/inicio.css">
    </head>
    <body>
<!--Primera parte-->
        <header class="encabezado">
            <div class="contenedor-navegacion">
<!-- Barra de navegacion -->
                <div class="contenido-navegacion contenedor">
                    <div class="logo">
                        <h2><span class="verde">COLEGIO PEDAGOGICO</span><span class="rojo"> DULCE MARIA</span></h2>
                    </div>
                    <nav class="navegacion ocultar">
                        <a href="#inicio">Inicio</a>
                        <a href="#nosotros">Sobre Nosotros</a>
                        <a href="#administracion">Administracion</a>
                        <a href="#formulario">Contacto</a>
                    </nav>
                    <div class="hamburguesa">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <div class="contenido-header" id="inicio">
                <div class="contenedor-encabezado">
                    <div class="texto-encabezado">
                        <h2>Bienvenido</h2>
                        <a href="?c=Login&a=Iniciar_sesion" class="btn bordes">Iniciar Sesion</a>
                    </div>
                    <video autoplay loop muted>
                        <source src="assets/video/inicio_presentacion.mp4">
                    </video>
                </div>
            </div>
        </header>
<!--Segunda parte-->
        <div class="contenedor-nosotros contenedor" id="nosotros">
            <div class="texto-nosotros">
                <p class="bienvenida">Bienvenido a!</p>
                <h1>COLEGIO PEDAGOGICO DULCE MARIA</h1>
                <p> El presente proyecto desarrollo un sistema de información que permitio dar solución a las necesidades del Colegio Pedagogico Dulce Maria,
                    para permitir la distribución de los refrigerios a los estudiantes de la institución. Anteriormente el colegio no cuentaba con un proceso
                    efectivo para controlar la información de los refrigerios que llegaban al colegio y de cuantos aprendices en cada curso eran los que requerian
                    dicho refrigerio.Este proyecto puede ser aplicado a colegios públicos y privados donde se entregue algún tipo de refrigerio diario. El presente
                    proyecto tuvo como finalidad desarrollar un sistema de información que permitio dar solución a las necesidades del Colegio Pedagógico Dulce
                    Maria, para permitir la distribución de los refrigerios a los estudiantes de la institución.
                </p>
            </div>
            <div class="imagenes-nosotros">
                <div class="imagen1">
                    <img data-src="assets/Img/inicio1.webp" alt="delfin dulce Maria">
                </div>
                <div class="imagenes2">
                    <img data-src="assets/Img/inicio2.webp" alt="sede infantil dulce maria">
                    <img data-src="assets/Img/inicio3.webp" alt="parque infantil dulce maria">
                </div>
            </div>
        </div>
<!--Tercera parte-->
        <section class="administracion contenedor" id="administracion">
            <h2>Administracion</h2>
            <div class="contenido-administracion">
                <div class="texto-administracion">
                    <h3>¡Nuestro grupo administrativo tiene vacantes para auxiliares!</h3>
                    <p>Nuestro grupo de administradores necesita ayuda para atender a todos los miembros de la sede, por lo tanto decidieron
                        reclutar auxiliares que les ayude a cumplir con labores basicos como la entrega de refrigerios, estos tendran la funcion de consultar
                        y actualizar su propia informacion en la gestion de usuarios, la consulta, la actualizacion, la eliminacion y el registro de la gestion
                        de refrigerios y la consulta en la gestion de cursos para facilitar su labor.
                    </p>
                    <p>Nuestro sistema les dara acceso a un panel administrativo
                        donde podran cumplir con las funciones nombradas anteriormente, se les brindara un usuario y contraseña para que puedan acceder alli cada
                        vez que necesiten cumplir una funcion
                    </p>
                    <a href="views/Company/login_register.php" class="btn btn-verde">Registrarse</a>
                </div>
                <div class="imagen-administracion">
                    <img data-src="assets/Img/inicio5.jpg" alt="administracion">
                </div>
            </div>
        </section>
<!--Cuarta parte-->
        <div class="formulario-contacto contenedor" id="formulario">
            <div class="informacion-contacto">
                <h3>Contactanos</h3>
                <p><i class="fas fa-envelope"></i>info@colegiodulcemaria.edu.co</p>
                <p><i class="fas fa-phone-alt"></i>+57 310 3359354</p>
                <div class="redes-sociales">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <form class="formulario">
                <div class="input-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="Ingresa tu Nombre" id="nombre">
                </div>
                <div class="input-formulario">
                    <label for="apellidos">Apellido</label>
                    <input type="text" placeholder="Ingresa tu appellido" id="apellidos">
                </div>
                <div class="input-formulario">
                    <label for="correo">Correo</label>
                    <input type="email" placeholder="Ingresa tu correo" id="correo">
                </div>
                <div class="input-formulario">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" placeholder="Ingresa un numero de contacto" id="telefono">
                </div>
                <div class="input-formulario">
                    <label for="mensaje">Mensaje</label>
                    <textarea></textarea>
                </div>
                <div class="btn-formulario">
                    <input type="submit" class="btn btn-verde" value="Enviar">
                </div>
            </form>
        </div>
<!--Quinta parte-->
        <div class="pie-pagina ">
            <div class="contenedor-piepagina contenedor">
                <div class="info">
                    <h3>Dirección</h3>
                    <p>Tv. 127c #139b-48, Bogotá</p>
                </div>
                <div class="info">
                    <h3>Atencion</h3>
                    <p>Lunes a viernes 7am - 4:30pm</p>
                    <p>+57 310 3359354</p>
                </div>
                <div class="info">
                    <h3>Horarios</h3>
                    <p>Lunes a viernes 7am - 4:30pm</p>
                    <div class="redes-sociales redes-pie">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div class="info">
                    <h3>Noticias</h3>
                    <p>Pon tu correo para recibir notificaciones</p>
                    <input type="email" placeholder="Tu correo">
                    <input type="submit" class="btn btn-verde" value="Enviar">
                </div>
            </div>
        </div>
<!--Derechos de autor-->
        <footer class="footer">
            <p>Todos los derechos reservados &copy; 2024 Proyecto KESGUA, desarrollado por Kevin Aragon y Esteban Guasca</p>
        </footer>
        <script src="assets/js/inicio.js"></script>
    </body>
</html>
