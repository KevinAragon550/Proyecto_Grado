<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Incluir Font Awesome desde CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
</head>
<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
		<hr>
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a href="?c=Users&a=Usuarios" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> &nbsp;
				Agregar Usuario</a>
			<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
		</li>
		<br>
	</ul>
</div>

<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Rol</th>
					<th>Código</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>EMAIL</th>
					<th>Estado</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
					<tr class="text-center">
						<td>
							<?php echo $user->getRolCode(); ?>
						</td>
						<td>
							<?php echo $user->getUserCode(); ?>
						</td>
						<td>
							<?php echo $user->getUserName(); ?>
						</td>
						<td>
							<?php echo $user->getUserLastName(); ?>
						</td>
						<td>
							<?php echo $user->getUserEmail(); ?>
						</td>
						<td>
							<?php echo $user->getUserStatus(); ?>
						</td>
						<td>
							<a href=""
								class="btn btn-success">
								<i class="fas fa-sync-alt"></i>
							</a>
						</td>
						<td>
							<a href=""
								class="btn btn-warning">
								<i class="far fa-trash-alt"></i>
							</a>
						</td>
					</tr>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	
</div>

</section>