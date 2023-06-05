<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1.0">
    <title>artistas</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.html">IMPRESIONISMO</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="vanguardia.html">vanguardia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="artistas.html">artistas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="obras.html">obras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tecnicas.html">tecnicas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contacto.html">contacto</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success text-dark" type="submit">Search</button>
            </form>
            <a href="signup.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="login bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </a>
          </div>
        </div>
      </nav>

<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article style="width:90%;margin:0 auto;border:solid;padding:10px">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
	    //mysqli_fetch_row($consulta) ARRAY INDEXADO
	   //mysqli_fetch_assoc($consulta) ARRAY ASOCIATIVO
	   //mysqli_fetch_array($consulta) ARRAY CON AMBOS INIDCES
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . " --> ";
			echo $resultados['bio'] . " --> ";
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>


<footer class="footer">
          <div class="container-fluid foot1 py-3">
              <div class="container py-3">
        
                      <div class="col-10 text-dark">
                          <div class="copy">
                              <p>Copyright ®2023 - Derechos reservados <br> Universidad de Palermo</p>
                          </div>
                      </div>
                  
              </div>
          </div>
        
        </footer>

</body>
</html>