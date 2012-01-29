<!-- conexion con la base de datos -->
<?php require("php/dbconnect.inc.php"); ?>
 
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sitio WEB - Inmuebles</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
  		<script type="text/javascript" src="js/Didact_Gothic_400.font.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=es"></script>
    	<script type="text/javascript" src="js/mapa.js"></script>
        
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

	<body id="page1">
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
							<!--
                             <li><a href="Publicar.html">Selling Estate</a></li>
							 <li><a href="Renting.html">Renting Estate</a></li>
							<li><a href="Finance.html">Finance</a></li>
							<li class="end"><a href="Contacts.html">Contact Us</a></li> -->
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
						  <div id="mapa">
								<figure class="img-border">
									<div id="map_canvas"></div>
								</figure>
								<!-- <div class="clear"></div> -->
							</div>
						</article>
						<article class="col2">
							<form id="form_1" method="post">
								<div class="pad1">
									<h3>Filtro de busqueda</h3>
									<div class="row">
										Palabra clave:<br>
										<input type="text" class="input" name="clave">
									</div>
									<div class="row_select">
										
                                        Municipio:<br>
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
									</div>
									<div class="row_select">
										
											Fracc:/Colonia:<br>
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
											Operacion:<br>
                                            <?php
										$consulta3 = mysql_query("SELECT id_operacion,nombre_operacion FROM tipo_operacion ORDER BY nombre_operacion");
										$nfilas3= mysql_num_rows($consulta3);
										?>
											<select name="operacion">
                                            <option value="0">Todo</option>
                                            <?php for($i=0; $i<$nfilas3; $i++)
										{
											$fila= mysql_fetch_array($consulta3);
										?>
                                            	<option value= <?php echo $fila["id_operacion"];?> ><?php echo $fila["nombre_operacion"]; ?></option>
                                                <?php } ?>
                                          </select>
										</div>
										<div class="cols pad_left1">
											<a href="#" class="button" onClick="document.getElementById('form_1').submit()">Buscar</a>
										</div>
									</div>
									<br>Busqueda Avanzada <a href="#">Pulsa Aqui</a>
								</div>
							</form>
						</article>
					</div>
					<div class="wrapper">
						
									
									
			  </div>
		  </div>
						</article>
						
	</div>
	<div class="body3">
	  <div class="main">
				<section id="content2">
					<div class="wrapper">
						<h2>Publicaciones Recientes</h2>
                      <article class="col3">
							<div class="pad2">
								
								<div class="wrapper pad_bot3">
									<figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
									<p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
											Price: <span class="color1">$ 600 000</span></strong></p>
									<p class="pad_bot2">
											Massa dictum ementum velitumo od consequat ante oremsumas .</p>
									<a href="#" class="button">Read more</a>
								</div>
								<div class="wrapper">
									<figure class="left marg_right1"><img src="images/page1_img5.jpg" alt=""></figure>
									<p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
											Price: <span class="color1">$ 600 000</span></strong></p>
									<p class="pad_bot2">
											Massa dictum ementum velitumo od consequat ante oremsumas.</p>
									<a href="#" class="button">Read more</a>
								</div>
							</div>
                            
                            
                            
						</article>
                        
                      <article class="col3">
							<div class="pad2">
								
								<div class="wrapper pad_bot3">
									<figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
									<p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
											Price: <span class="color1">$ 600 000</span></strong></p>
									<p class="pad_bot2">
											Massa dictum ementum velitumo od consequat ante oremsumas .</p>
									<a href="#" class="button">Read more</a>
								</div>
								<div class="wrapper">
									<figure class="left marg_right1"><img src="images/page1_img5.jpg" alt=""></figure>
									<p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
											Price: <span class="color1">$ 600 000</span></strong></p>
									<p class="pad_bot2">
											Massa dictum ementum velitumo od consequat ante oremsumas.</p>
									<a href="#" class="button">Read more</a>
								</div>
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
					<span class="call">Jesus <span>Mendoza</span></span>
					
					<!-- {%FOOTER_LINK} -->
				</footer>
<!-- / footer -->
			</div>
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
		<script type="text/javascript">
		   $(window).load(function() {
		   $('#slider').nivoSlider({
				effect:'sliceUpDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
				slices:17,
				animSpeed:500,
				pauseTime:6000,
				startSlide:0, //Set starting Slide (0 index)
				directionNav:false, //Next & Prev
				directionNavHide:false, //Only show on hover
				controlNav:true, //1,2,3...
				controlNavThumbs:false, //Use thumbnails for Control Nav
				controlNavThumbsFromRel:false, //Use image rel for thumbs
				controlNavThumbsSearch: '.jpg', //Replace this with...
				controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
				keyboardNav:true, //Use left & right arrows
				pauseOnHover:true, //Stop animation while hovering
				manualAdvance:false, //Force manual transitions
				captionOpacity:1, //Universal caption opacity
				beforeChange: function(){$('.nivo-caption').animate({bottom:'-110'},400,'easeInBack')},
				afterChange: function(){Cufon.refresh();$('.nivo-caption').animate({bottom:'-20'},400,'easeOutBack')},
				slideshowEnd: function(){} //Triggers after all slides have been shown
			});
		   Cufon.refresh();
		});
		</script>
	</body>
</html>