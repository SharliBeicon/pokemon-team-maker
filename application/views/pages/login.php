<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center">
	<div class="logo">Identifícate</div>
	<!-- Main Form -->
	<?php if($this->session->userdata('id') != null){ ?>
		<center>Estás logueado</center>
	<?php }else{ ?>
		<div class="login-form-1">
			<form id="login-form" class="text-left" method = "post" action = "<?php echo base_url() ?>Usuarios/doLogin">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Usuario</label>
							<input type="text" class="form-control" id="lg_username" name="usuario" placeholder="Usuario">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Contraseña</label>
							<input type="password" class="form-control" id="lg_password" name="password" placeholder="Contraseña">
						</div>
					</div>
					<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<p>¿Has olvidado tu contraseña? <a href="<?php echo base_url() ?>Usuarios/forgot">Click Aquí</a></p>
					<p>¿Nuevo usuario? <a href="<?php echo base_url() ?>Usuarios/registration">Crear nueva cuenta</a></p>
				</div>
			</form>
		</div>
	<?php } ?>
	<!-- end:Main Form -->
</div>