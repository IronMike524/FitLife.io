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
			<img src="img/feliz-morena-fitness-mujer-toalla-sosteniendo-brazo-cadera 1.png" alt="">
		</div>

		<div class="content">
			<h3>¿Por qué deberías mejorar tu estilo de vida?</h3>
			<ul class="content">
				<li>Te vuelves más sano</li><br>
				<li>Equilibras tu peso</li><br>
				<li>Reduces el estrés</li><br>
				<li>Fortaleces tu cuerpo</li><br>
				<li>Aumentas tu autoestima</li>
				<li>Previenes lesiones</li>
			</ul>
			<a href="pages/init.php" class="btn-about">Quiero Alimentarme Mejor</a>
		</div>
	</div>
</section>
<div class="division-opaca"></div>

<!-- Seccion De Suplementos -->
<section class="feeding" id="feeding">
    <div class="row">
        <div class="content">
            <ul class="content">
                    <h3>Mitos</h3>
                    <ul class="sub-list">
                        <li>Las dietas extremadamente bajas en calorías son la clave para perder peso rápidamente.</li>
                        <li>Los carbohidratos son malos y deben evitarse por completo.</li>
                        <li>Comer solo proteínas te hará ganar músculo de manera instantánea.</li>
                    </ul>
			</ul>
			<ul class="content">
                    <h3>Hechos</h3>
                    <ul class="sub-list">
                        <li>La pérdida de peso sostenible requiere un equilibrio entre calorías consumidas y gastadas.</li>
                        <li>Los carbohidratos son una fuente importante de energía, elige opciones integrales y moderadas.</li>
                        <li>La proteína es esencial para la reparación muscular, pero una dieta equilibrada es clave para el desarrollo muscular.</li>
                    </ul>
            </ul>
				<a href="pages/init.php" class="btn-feed">Quiero Alimentarme Mejor</a>
        </div>
    </div>
</section>
<!-- Fin -->




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
