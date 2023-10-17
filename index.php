<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Page</title>
    <link rel="stylesheet" href="style/style.css">
	<link rel="shortcut icon" href="img/Logo FL.png">
</head>

<?php
 include('includes/nav.html');
?>

<!-- Sesion Principal de la pagina -->
<section class="home" id="home">
	<div class="content">
		<!-- <h3>Bienvenidos A FitLife</h3> -->
		<p>El viaje hacia una vida más saludable comienza con pequeñas elecciones todos los días.</p>
		<a href="pages/Login/login.php" class="btn">Empieza YA</a>
	</section>
<!-- Fin  -->
<div class="division-opaca"></div>
<!-- Sesion 2-->
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
			<a href="pages/init.php" class="btn">Quiero Alimentarme Mejor</a>
		</div>
	</div>
</section>
<div class="division-opaca"></div>

<!-- Seccion 3 -->
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
				<a href="pages/init.php" class="btn">Quiero Alimentarme Mejor</a>
        </div>
    </div>
</section>
<!-- Fin -->




<!-- Fin -->

<?php
 include('includes/footer.html');
?>
	<!-- Link JS -->
<script src="js/script.js"></script>
</body>
</html>
