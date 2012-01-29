<?php require("php/dbconnect.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Publicar Inmueble</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
		<script type="text/javascript" src="js/Didact_Gothic_400.font.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
		<script type="text/javascript" src="js/script.js"></script>
        
        <script type="text/javascript" src="js/formdata.js"></script>
        
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
			<style type="text/css">
				.bg{ behavior: url(js/PIE.htc); }
			</style>
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
			</div>
		<![endif]-->
	</head>
	<body id="page6">
		<div class="body1">
			<div class="main">
<!-- header -->
				<header>
					<h1><a href="index.html" id="logo"></a></h1>
					<div class="wrapper">
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.jpg" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon3.jpg" alt=""></a></li>
						</ul>
					</div>
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="index.php">Inicio</a></li>
							<li><a href="publicar.php">Publicar</a></li>
							
						</ul>
					</nav>
					
				</header>
<!-- / header -->
			</div>
		</div>
<!-- content -->
		<div class="body2">
			<div class="main">
				<section id="content">
					<div class="wrapper">
						<article class="col1">
							<div class="pad2">
								<h2 class="pad_bot1 pad_top1">Publicar Inmueble</h2>
                                <h3>Datos personales</h3>
								<form id="ContactForm" method="post" action="/" enctype="multipart/form-data">
									<div>
										<div  class="wrapper">
											<span>Nombre:</span>
											<input type="text" class="input" >
										</div>
										<div  class="wrapper">
											<span>E-mail:</span>
											<input type="email" class="input" >
										</div>
                                        <div  class="wrapper">
											<span>Telefono:</span>
											<input type="tel" class="input" >
										</div>
                                        
                                        <h3>Datos del inmueble</h3>
                                        
                                        <!----- ---->
                                        
                                        <div class="row_select">
										
                                        Municipio:
                                        <?php
										$consulta = mysql_query("SELECT id_municipio,nombre_municipio FROM municipios ORDER BY nombre_municipio");
										$nfilas= mysql_num_rows($consulta);
										?>
										<select name="municipio">
                                        <option value"0" selected>Todos los mpios.</option>
                                        <?php for($i=0; $i<$nfilas; $i++)
										{
											$fila= mysql_fetch_array($consulta);
										?>
                                        	<option value= <?php echo $fila["id_municipio"];?> ><?php echo $fila["nombre_municipio"]; ?></option>
                                            <?php } ?>
                                            
                                        </select>
									
										
											Colonia: 
                                            <?php
										$consulta2 = mysql_query("SELECT id_colonia,nombre_colonia FROM colonias ORDER BY nombre_colonia");
										$nfilas2= mysql_num_rows($consulta2);
										?>
											<select name="colonia">
                                            	<option value="0">Todas las Colonias</option>
                                                <?php for($i=0; $i<$nfilas2; $i++)
										{
											$fila= mysql_fetch_array($consulta2);
										?>
                                                
                                                <option value= <?php echo $fila["id_colonia"];?> ><?php echo $fila["nombre_colonia"]; ?></option>
                                                <?php } ?>
                                                
                                      </select>   
									</div>
										
									<div class="row_select">
										
									<div class="row_select pad_bot1">
										<div class="cols">
											<br>Que desea hacer?<br>
											   Rentar
											        <input type="radio" name="operacion" value="1" id="operacion_0">
											       
										      Vender<input type="radio" name="operacion" value="2" id="operacion_1">
											
									  	</div>
                                      </div>
                                        
                                        <br>
                                        <div  class="wrapper">
                                        	<span>Imagenes:</span>
                                        	<input type="file" name="imgs" id="imgs" multiple />
                                        </div>
                                        <br>
										<div  class="textarea_box">
											<span>Descripcion:</span>
											<textarea name="textarea" cols="1" rows="10"></textarea>
										</div>
										<span>&nbsp;</span>
										<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()">Limpiar</a>
										<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()">Publicar</a>
									</div>
								</form>
                                	<div id="ajax"></div>
									<div id="imagenes"></div>
							</div>
						</article>
						
				  </div>
					<div class="wrapper">
						<article class="col1">
							<div class="pad2">
								<h3 class="pad_bot1">Terminos y condiciones</h3>
								<p class="pad_bot1"><strong>Si en cualquier momento el “Usuario” no estuviera de acuerdo total o parcialmente con estos Términos y Condiciones, deberá abstenerse inmediatamente de usar el “Portal” en cualquiera de sus partes o secciones. </strong></p>
								<p class="pad_bot2">El “Usuario” acepta en este acto, que la información contenida dentro del “Portal” referente a inmuebles y Servicios, no constituye una oferta, sino solamente, un medio de información para el propio “Usuario”. Por lo anterior, por ejemplo, si el valor de un inmueble promocionado a través del “Portal” fuera erróneo, ello no constituye una oferta, sino solamente un dato informativo que en cualquier momento podrá aclararse al “Usuario”. El “Usuario” acepta también que salvo en el caso de que se le indique expresamente lo contrario, la “Empresa” es un tercero en relación tanto con la información y operaciones que se relacionen con los bienes inmuebles promovidos, como en la información y operaciones relacionadas con los “Servicios” incluidos los “Servicios Abiertos al Usuario”, por lo que no tendrá ningún tipo de obligación como comprador, vendedor, arrendador, arrendatario, permutante, y en general bajo cualquier figura regulada o permitida por la Ley.</p>
							</div>
							
							
							<div class="pad2">
								<a href="#" class="button">Leer mas...</a>
							</div>
						</article>
						
					</div>
				</section>
			</div>
		</div>
<!-- / content -->
		<div class="body4">
			<div class="main">
<!-- footer -->
				<footer>
					<span class="call">Contacto: <span>contacto@inmuebles.com</span></span>
					
					<!-- {%FOOTER_LINK} -->
				</footer>
<!-- footer -->
			</div>
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>