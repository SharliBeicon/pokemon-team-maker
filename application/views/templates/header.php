<!DOCTYPE html>
<html lang = "es">
	<head>
	    <title>Pokemon Team Maker</title>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    	    <link href="<?php echo base_url(); ?>/assets/css/estilos.css" rel="stylesheet">
    	    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/pokeball.png">
    	    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    </head>
    <body>
        <header>
            <nav class = "navbar navbar-inverse navbar-static-top" role = "navigation">
                <div class="container">
                    <div class = "navbar-header">
                        <button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target ="#navegador">
                            <span class = "sr-only">Desplegar / Ocultar Menu</span>
                            <span class = "icon-bar"> </span>
                            <span class = "icon-bar"> </span>
                            <span class = "icon-bar"> </span>
                        </button>
                    </div>
                    <div class = "collapse navbar-collapse" id = "navegador">
                        <ul class = "nav navbar-nav">
                            <li class = "<?php echo $crear ?>"><a href = "<?php echo base_url(); ?>"><img src = "<?php echo base_url(); ?>/img/pokeball.png" style="width:30px;height:30px;"><b> Crea tu Equipo</b></a></li>
                        </ul>
                        <ul class = "nav navbar-nav">
                            <li class = "<?php echo $pokedex ?>"><a href = "<?php echo base_url(); ?>PokeApi/pokedex"><img src = "<?php echo base_url(); ?>/img/pokedex.png" style="width:30px;height:30px;"><b> Pokédex</b></a></li>
                        </ul>
                        <div class="nav navbar-nav navbar-right">
                            <?php if($this->session->userdata('id') != null){ ?>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user"><a href="<?php echo base_url(); ?>Usuarios/perfil" style="text-decoration: none; color: black"></span> Bienvenido <?php echo $this->session->userdata('nombre'); ?></a></button>
                                <button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Desplegar menú</span>
                                </button>
 
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>PokeApi/equipos">Ver equipos</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Usuarios/logout">Desconectar</a></li>
                              </ul>
                            </div>
                            <?php }else{ ?>
                            <a href = "<?php echo base_url(); ?>Usuarios/login"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user"></span> Login/Register</button></a></li>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        <center><img src="<?php echo base_url(); ?>/img/pokemon_logo.png" alt="Pokémon" style="width:375px;height:138px;"> </center>
        <br>