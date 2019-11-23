<?php 
    //Destruyo las variables de sesiones
    session_destroy();

    //echo "<script>window.location='index.php?pagina=ingreso'</script>";
	header("Location: index.php?pagina=ingreso");

