<?php

$blog = ControladorBlog::ctrMostrarBlog();
$categorias = ControladorBlog::ctrMostrarCategorias(); 
$articulos = ControladorBlog::ctrMostrarConInnerJoin(5);
$totalArticulos = ControladorBlog::ctrMostrarTotalArticulos();
$totalPaginas = ceil(count($totalArticulos)/5);


/* echo "<pre class='bg-white'>";
echo "<br><br><br><br><br><br>";
print_r($articulos);
echo "</pre>"; */

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	$validarRuta = "";
	if (isset($_GET['pagina'])) {

		if (is_numeric($_GET['pagina'])) {
			
			
			

		}else{
			foreach ($categorias as $key => $value) {
				if ($_GET['pagina'] == $value['ruta_categoria']) {
	
					$validarRuta = "categorias";
					break;
				}
			}
		}


		if ($validarRuta == "categorias") {


			echo '
				<title>' . $blog["titulo"] . ' | ' . $value['descripcion_categoria'] . '  </title>
				<meta name="title" content="' . $value['titulo_categoria'] . '">
				<meta name="description" content="' . $value['descripcion_categoria'] . '">
			';

			$palabras_claves = json_decode($value["p_claves_categoria"], true);

			$p_claves = '';
			foreach ($palabras_claves as $key => $value) {
				$p_claves .= "$value,";
			}

			$p_claves = substr($p_claves, 0, -1);

			echo '<meta name="keywords" content="' . $p_claves . '">';

			
			#include 'paginas/categorias.php';
		} else {
			echo '
				<title>' . $blog["titulo"] . '</title>
				<meta name="title" content="' . $blog["titulo"] . '">
				<meta name="description" content="' . $blog["descripcion"] . '">
			';

			$palabras_claves = json_decode($blog["palabras_claves"], true);

			$p_claves = '';
			foreach ($palabras_claves as $key => $value) {
				$p_claves .= "$value,";
			}

			$p_claves = substr($p_claves, 0, -1);

			echo '<meta name="keywords" content="' . $p_claves . '">';

			
		}
	} else {
		echo '
				<title>' . $blog["titulo"] . '</title>
				<meta name="title" content="' . $blog["titulo"] . '">
				<meta name="description" content="' . $blog["descripcion"] . '">
			';

		$palabras_claves = json_decode($blog["palabras_claves"], true);

		$p_claves = '';
		foreach ($palabras_claves as $key => $value) {
			$p_claves .= "$value,";
		}

		$p_claves = substr($p_claves, 0, -1);

		echo '<meta name="keywords" content="' . $p_claves . '">';
	}

	?>

	<!-- <link rel="icon" href="vistas/img/icono.jpg"> -->
	<link rel="icon" href="<?= $blog["logo"] ?>">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

	<!-- JdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<link rel="stylesheet" href="vistas/css/plugins/jquery.jdSlider.css">

	<link rel="stylesheet" href="vistas/css/style.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- JdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<script src="vistas/js/plugins/jquery.jdSlider-latest.js"></script>

	<!-- pagination -->
	<!-- http://josecebe.github.io/twbs-pagination/ -->
	<script src="vistas/js/plugins/pagination.min.js"></script>

	<!-- scrollup -->
	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<!-- https://easings.net/es# -->
	<script src="vistas/js/plugins/scrollUP.js"></script>
	<script src="vistas/js/plugins/jquery.easing.js"></script>

</head>

<body>

	<?php
	/* MODULOS FIJOS SUPERIORES */
	include 'paginas/modulos/cabecera.php';
	include 'paginas/modulos/redes-sociales-movil.php';
	include 'paginas/modulos/buscador-movil.php';
	include 'paginas/modulos/menu.php';



	/* NAVEGAR ENTRE PAGINAS */
	$validarRuta = "";
	if (isset($_GET['pagina'])) {

		foreach ($categorias as $key => $value) {
			if ($_GET['pagina'] == $value['ruta_categoria']) {

				$validarRuta = "categorias";
				break;
			}
		} /* FOREACH */

		/* VALIDAR LAS RUTAS */
		if ($validarRuta ==  "categorias") {
			include 'paginas/categorias.php';
		} else {
			include 'paginas/404.php';
		}
	} else {

		#include 'paginas/categorias.php';
		#include 'paginas/articulos.php';		
		include 'paginas/inicio.php';
	}




	/* MODULOS FIJOS INFERIORES */
	include 'paginas/modulos/footer.php';
	?>

	<input type="hidden" name="rutaActual" value="<?=$blog['dominio']?>"> 
	<script src="vistas/js/script.js"></script>


</body>

</html>