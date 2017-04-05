<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<div class="container-fluid">
<center><font color='red'><b><?php echo validation_errors();?></b></font></center>
<!-- REGISTRATION FORM -->
<div class="text-center">
	<div class="logo">Regístrate</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" method = "post" action = "<?php echo base_url() ?>Usuarios/register">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Usuario</label>
						<input type="text" class="form-control" id="reg_username" name="usuario" placeholder="Usuario">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Contraseña</label>
						<input type="password" class="form-control" id="reg_password" name="password" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Confirma contraseña</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="password_conf" placeholder="Confirma contraseña">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="reg_email" name="email" placeholder="Email">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>¿Tienes ya una cuenta? <a href="<?php echo base_url() ?>Usuarios/login">Identifícate aquí</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>