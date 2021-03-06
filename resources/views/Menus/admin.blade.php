<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel = "stylesheet" href = "{{ asset('css/estilos.css') }}"/>
	<link rel = "stylesheet" href = "{{ asset('css/fonts.css') }}"/> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div id="perfil"><b id="empresa">Creativos</b>
			<ul>
				<li><span class="icon-account_circle"></span></li>
			</ul>
			<br><b>Angel Hernández</b>	
		</div>

		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span> <span class="icon-close" style="display: none"></span>Menu</a>
		</div>
 
		<nav>
			<ul class="menu">
				<li><a href=""><span class="icon-home3"></span>Inicio</a></li>
				<li><a href=""><span class="icon-banknote"></span>Ventas</a></li>
				<li><a href=""><span class="icon-cart"></span>Compras</a></li>
				<li><a href=""><span class="icon-monetization_on"></span>Rentas</a></li>
				<li id="man" class="submenu"><a href="#"><span class="icon-wrench"></span>Mantenimiento <span class="icon-dots-three-horizontal"></span></a>
							<ul class="item">
								<li id="pro"><a href=""><span class="icon-update"></span>Programación</a></li>
								<li><a href=""><span class="icon-file-text"></span>Informe</a></li>
								<li id="cal"><a href=""><span class="icon-calendar"></span>Calendario</a></li>
							</ul>
				</li>
				<li id="arc" class="submenu"><a href="#"><span class="icon-folder"></span>Archivo<span class="icon-dots-three-horizontal"></a>
							<ul class="item">
								<li><a href=""><span class="icon-question-circle"></span>Ayuda</a></li>
								<li id="out"><a href=""><span class="icon-log-out"></span>Cerrar Sesión</a></li>
							</ul>
				</li>
			</ul>
		</nav>
	</header>