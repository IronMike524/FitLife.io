<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Page</title>
    <link rel="stylesheet" href="style/style.css">
	<!-- Link Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<?php
 include('includes/nav.html');
?>

<!-- Sesion Principal de la pagina -->
<section class="home" id="home">
	<div class="content">
		<!-- <h3>Bienvenidos A FitLife</h3> -->
		<p>El viaje hacia una vida más saludable comienza con pequeñas elecciones todos los días.</p>
		<a href="pages/init.php" class="btn-init">Empieza YA</a>
	</section>
<!-- Fin  -->
<div class="division-opaca"></div>
<!-- Sesion motivacion -->
<section class="about" id="about">
	<div class="row">
		<div class="image-us">
			<img src="img/img2.jpg" alt="">
		</div>

		<div class="content">
			<h3>¿Porque debemos entrenar?</h3>
			<ul class="content">
				<li>Mejora de la salud física: El entrenamiento regular puede mejorar la salud física de muchas maneras, como fortaleciendo los músculos y huesos, mejorando la circulación sanguínea, 
				reduciendo el riesgo de enfermedades cardíacas y diabetes, y fortaleciendo el sistema inmunológico.</li><br>
				<li>Control del peso: El entrenamiento regular también puede ayudar a controlar el peso corporal al quemar calorías y aumentar el metabolismo.</li><br>
				<li>Reducción del estrés: El ejercicio puede reducir el estrés y mejorar el estado de ánimo, 
					gracias a la liberación de endorfinas que ocurre durante la actividad física.</li><br>
				<li>Mejora de la autoestima: El entrenamiento regular puede mejorar la autoestima y la confianza en uno mismo, 
				al lograr objetivos de fitness y ver mejoras en el físico.</li><br>
				<li>Prevención de lesiones: El entrenamiento regular puede ayudar a prevenir lesiones 
				al fortalecer los músculos y mejorar la postura y el equilibrio.</li>
				</ul>
		</div>
	</div>
</section>
<div class="division-opaca"></div>
<!-- Seccion De Suplementos -->
<section class="menu" id="menu">
	<h1 class="head"> Mejores <span> Suplementos </span></h1>
	<div class="box-container">
		<div class="box">
			<img src="img/Smart.jpg" alt="">
			<h3>Smart Gainer ProScience</h3>
			<a href="#" class="btn">Consiguelo!!</a>
		</div>

		<div class="box">
			<img src="img/Creastack.jpg" alt="">
			<h3>CreaStack</h3>
			<a href="#" class="btn">Consiguelo!!</a>
		</div>

		<div class="box">
			<img src="img/Bipro.jpg" alt="">
			<h3>Smart Gainer ProScience</h3>
			<a href="#" class="btn">Consiguelo!!</a>
		</div>

		<div class="box">
			<img src="img/Megaplex.jpg" alt="">
			<h3>Smart Gainer ProScience</h3>
			<a href="#" class="btn">Consiguelo!!</a>
		</div>
	</div>
</section>
<!-- Fin -->

<section class="contact" id="contact">
	<h1 class="head"><span>Contacta</span> Con nosotros</h1>
	<div class="row">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.70749736785!2d-75.55910897519526!3d6.306115744229818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f3e26397079%3A0x5a5f7af9067a2dd9!2sUniminuto!5e0!3m2!1sen!2sco!4v1683210785237!5m2!1sen!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<form action="">
			<h3>Ponerse en contacto</h3>
			<div class="inputBox">
				<span class="fas fa-user"></span>
				<input type="text" placeholder="Nombre De Usuario">
			</div>

			<div class="inputBox">
				<span class="fas fa-envelope"></span>
				<input type="email" placeholder="Correo Electronico">
			</div>

			<div class="inputBox">
				<span class="fas fa-phone"></span>
				<input type="number" placeholder="Telefono / Celular">
			</div>

			<input type="submit" class="btn" value="Contactanos Ahora!!">
		</form>
	</div>
</section>
<?php
 include('includes/footer.html');
?>
	<!-- Link JS -->
<script src="js/script.js"></script>
</body>
</html>
