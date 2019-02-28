<?php 

?>
<html>
<head>
   <meta charset="utf-8">
   <link rel="shortcut icon" href="../images/thead.png">
   <title>TZT</title>  
   <link rel="stylesheet" href="../css/header.css">
   <link rel="stylesheet" href="../css/general.css">
   <link rel="stylesheet" href="../css/footer.css">
   <link rel="stylesheet" href="../css/main.css">
   <link rel="stylesheet" href="../css/nreg.css">
</head>
<body>
	<header>
		<div class="icnam">
			<img class="im" src="../images/icon.png">
			<label class="namep">
       			<h2>Team zero two</h2>			
		    </label>
		</div>		
		<input type="checkbox" id="check">	
		<label for="check" class="icon-menu"></label>	
		<nav class="menu">
			<ul>
				<li><a href="iniciosecion.php">Iniciar secion</a></li>	/
				<li><a style="color: red" href="#">Registrarse</a></li>				
			</ul>			
		</nav>
	</header>
	<main>
		<div class="content-general">
			<div class="menud">
				<img class="immg" src="../images/imag.png">
				<div class="menbie">
					welcome to Team zero two
				</div>	
				<div class="menh">			
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../modulos/contenido.php">Contenido</a></li>
                    <li><a href="../modulos/imagenes.php">Imagenes</a></li>
                    <li><a href="../modulos/acercad.php">Acerca de</a></li> 
				</div>			
			</div>
			<div class="content-i">
				<div class="content-i-gen" >
				   <div class="content-i-reg">
				   	    <form name="formulario" action="#" method="post" onSubmit="return validarfor();">
				   	    	<img class="imag12" src="../images/imag.png">
					        <div class="namec">
						        Nombre: <input type="text" name="nombre" id="nombre">
					            Apellido paterno: <input type="text" name="ap" id="ap">
					            Apellido materno: <input type="text" name="am" id="am">
					        </div>
					        <div class="nna">
					        	 Nickname: <input  type="text" name="nick">
					        </div>					   
					        <div class="correo">
					        	E-mail: <input type="email" name="o">			        	
					        </div>
					        <div class="pass">
						        Password: <input type="text" name="p">
					        </div>
					        <div class="botons">
					        	<input type="submit" name="">
					        	<input type="reset" name="">
					        </div>
				   	    </form>				   		
				   </div>
				</div>					
			</div>			
		</div>
	</main>
	<footer>
		<div class="container-footer">
			<div class="copyr">
				© 2018 Todos los derechos reservados | <a 
                href="">TZT</a>
			</div>	
			<div class="information">
				<a href="">Informacion general</a> | <a
                href="">Privacion</a> | <a 
                href="">Terminos y condiciones</a> 
			</div>		
		</div>		
	</footer>
    <script src="../js/codigo.js"></script>
</body>
</html>