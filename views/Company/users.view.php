<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?c=Dashboard&a=index">Colegio Dulce Maria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">USUARIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">REFIGERIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">CURSOS</a>
        </li>
        
        
      </ul>
      
      
    </div>
  </div>
</nav>
<br>

<div class="col-md-8 col-md-offset-2">
        <h3 class="titulo">FORMULARIO DE REGISTRO</h3>
        <form action="" method="post" class="form-neon" autocomplete="off">
            <fieldset>
                <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4"><br>
                            <div class="">
                                
                                <div class="form-group">
                                    
                                    <select class="form-control" name="rolCode" required>
                                        <option value="" selected="" disabled="">Seleccione un Rol</option>
                                        <option value="1">Coordinador</option>
                                        <option value="2">Auxiliar</option>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="userCode" class="bmd-label-floating">Cédula Usuario</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="userCode"
                                    id="userCode" maxlength="20" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="userName" class="bmd-label-floating">Nombres</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="userName" id="userName" maxlength="35" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="userLastName" class="bmd-label-floating">Apellidos</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="userLastName" id="userLastName" maxlength="35" required>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userEmail" class="bmd-label-floating">Email</label>
                                <input type="email" class="form-control" name="userEmail" id="userEmail" maxlength="70"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userPass" class="bmd-label-floating">Contraseña</label>
                                <input type="password" class="form-control" name="userPass" id="userPass"
                                    maxlength="200" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userPassConfirm" class="bmd-label-floating">Repetir contraseña</label>
                                <input type="password" class="form-control" name="userPassConfirm" id="userPassConfirm"
                                    maxlength="200" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                            <label for="userPassConfirm" class="bmd-label-floating">Estado</label>
                                <select class="form-control" name="userStatus" required>
                                    <option value="" selected="" disabled="">Seleccione una opción</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <p class="text-center" style="margin-top: 40px;">
                <a type="submit" href="?c=Users&a=Usuarios" class="btn bg-secondary text-white">Cancelar</a>
                <input class="btn btn-success letra3" type="submit" value="Registrar Usuario">
                <a href="?c=Users&a=consultarUsuarios" class="btn btn-primary"> Lista De Usuarios</a>
                <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
            </p>
        </form>
    </div>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</html>