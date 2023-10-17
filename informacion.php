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
<section class="home-info">
	<div class="content-info">
		<h3>¡Bienvenido a nuestra sección de información!</h3>
		<p>Navega a través de nuestra colección de información cuidadosamente seleccionada y descubre todo lo que necesitas saber para mejorar tu salud y bienestar. Estamos aquí para proporcionarte la información precisa y confiable que te ayudará a tomar decisiones informadas para tu estilo de vida.</p>
</section>


<!-- Sesion del tipo de cuerpo -->
<section class="typebody" id="info">
	<h1>Tipos de Cuerpo: Descubre tu Fisiología Única</h1>
	<p>Cada uno de nosotros es único, y esto se refleja en nuestra fisiología. Los tipos de cuerpo son una forma de comprender cómo tu cuerpo responde al ejercicio y la nutrición. En esta sección, exploraremos los tres principales tipos de cuerpo: endomorfo, ectomorfo y mesomorfo. Aprenderás sobre las características distintivas de cada tipo de cuerpo y cómo puedes adaptar tu enfoque de fitness y nutrición para aprovechar al máximo tus ventajas naturales. ¡Conoce tu tipo de cuerpo y desbloquea tu potencial para una vida más saludable y activa!</p>
	<div class="container-morfo">
        <div class="card-morfo">
            <figure>
                <img src="img/Ectomorfo.jpg" alt="">
            </figure>
            <div class="cont-morfo">
                <h1>Ectomorfo</h1>
                <p>Son personas delgadas y altas, que no tienden ni a acumular grasa ni a desarrollar músculo. Su metabolismo es muy rápido.</p>
                <a href="#">Quiero Saber Mas!!</a>
            </div>
        </div>
        <div class="card-morfo">
            <figure>
                <img src="img/Mesomorfo.jpg" alt="">
            </figure>
            <div class="cont-morfo">
                <h1>Mesomorfo</h1>
                <p>Los más equilibrados, son musculosos y de complexión robusta. Su metabolismo es lo que consideramos de ritmo normal.</p>
                <a href="#">Quiero Saber Mas!!</a>
            </div>
        </div>
        <div class="card-morfo">
            <figure>
                <img src="img/Endomorfo.jpg" alt="">
            </figure>
            <div class="cont-morfo">
                <h1>Endomorfo</h1>
                <p>Son personas que tienen tendencia a acumular grasa, su cuerpo suele ser más redondeado, tienen un metabolismo lento.</p>
                <a href="#">Quiero Saber Mas!!</a>
            </div>
        </div>
    </div>
</section>

<?php
 include('includes/footer.html');
?>
	<!-- Link JS -->
<script src="js/script.js"></script>
</body>
</html>