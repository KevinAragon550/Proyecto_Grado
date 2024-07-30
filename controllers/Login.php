<?php
session_start();
require_once "models/User.php";

class Login
{
    public function __construct()
    {
    }

    public function Iniciar_sesion()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            
            require_once "views/Company/login_register.php";
        }

        // ---------- INICIAR SESION  ----------//
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User($_POST['correo'], $_POST['contrasena']);
            $user = $user->login();
            
            if ($user) {
                $status = $user->getUserStatus();
                $rol = $user->getRolCode();
                
                if ($status == 1) {
                    if ($rol == 1) {
                        $_SESSION['session'] = "Coordinador";
                        $_SESSION['rol'] = $rol;
                    } elseif ($rol == 2) {
                        $_SESSION['session'] = "Auxiliar";
                        $_SESSION['rol'] = $rol;
                    } elseif ($rol == 3) {
                        $_SESSION['session'] = "##";
                        $_SESSION['rol'] = $rol;
                    }
                    $user = serialize($user);
                    $_SESSION['profile'] = $user;
                    header("Location: ?c=Dashboard");
                } else {
                    // Usuario inactivo
                    echo "usuario inactivo";
                    require_once "views/Company/index.view.php";
                }
            } else {
                // Usuario incorrecto
                echo "<script>alert('usuario o contraseña  incorrecta')</script>";
                require_once "views/Company/index.view.php";
            }
        }
    }
}

