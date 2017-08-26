<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Gestiona - Inicio</title>
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1 class="text-center inicioTitle">GESTIONA</h1>
				<br>
				<h3 class="text-center">
				Con <b>GESTIONA</b> podrás realizar la gestión del hogar fácilmente. Tendrás el control tanto de los ingresos y gastos, y así ver cuanto eres capaz de ahorrar mes a mes.
				</h3>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="inicioContenedor">
						<h3 class="text-center">Comienza tu gestión</h3>
						<form action="login" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="email" name="inicioEmail" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" name="inicioPassword" class="form-control" placeholder="Password">
							</div>
							<input type="submit" name="enviar" value="Iniciar Sesión" class="btn btn-block btn-info">
						</form>
						<br>
						<a href="" class="text-danger">Olvidaste la contraseña?</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="inicioContenedor">
						<h3 class="text-center">Crea tu cuenta</h3>
						<form action="registro" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" id="nombre" name="registroNombre" class="form-control" value="" placeholder="Nombre">
								<span id="nombreError" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="registroApellidos" class="form-control" id="apellidos" value="" placeholder="Apellidos">
								<span id="apellidosError" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="email" name="registroEmail" class="form-control" placeholder="Email">
								<span id="emailError" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="password" name="registroPassword" class="form-control" placeholder="Password">
								<span id="pwError" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="password" name="registroRePassword" class="form-control" placeholder="Repite Password">
								<span id="pwReError" class="text-danger"></span>
							</div>
							<input type="submit" name="crear" value="Crear Cuenta" class="btn btn-block btn-info">
							<span id="formError" class="text-danger" hidden>Debes rellenar correctamente todos los campos</span>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="js/app.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>