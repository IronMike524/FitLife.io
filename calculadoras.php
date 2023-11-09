<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Page</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styleCalculadoras.css">
	<link rel="shortcut icon" href="img/Logo FL.png">
        <!-- Link Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<?php
 include('includes/nav.html');
?>

<!-- Sesion Principal de la pagina -->
<section class="home-info">
	<div class="content-info">
		<h3>"Calcula Tu <span>Salud</span>, Calcula Tu <span>Éxito</span>. Descubre nuestras útiles <span>calculadoras</span>, desde el IMC hasta las necesidades de macronutrientes. Obtén información instantánea para impulsar tu <span>bienestar</span>."</h3>
</section>


<!-- Sesion del tipo de cuerpo -->
<nav class="nav-calculator">
        <a href="#IMC" onclick="showCalculator('IMC')">Calculadora de Índice de Masa Corporal</a>
        <a href="#Calorias" onclick="showCalculator('Calorias')">Calculadora de Requerimientos Calóricos Diarios</a>
        <a href="#Macros" onclick="showCalculator('Macros')">Calculadora de Macronutrientes</a>
        <a href="#Grasa" onclick="showCalculator('Grasa')">Calculadora de Porcentaje de Grasa Corporal</a>
        <a href="#">Pruebas De Calculadora</a>
        <div class="animation start-home"></div>
    </nav>
    <div class="content">
        <div id="IMC" class="calculator">
            <h2>Calculadora de Índice de Masa Corporal</h2>
            <input type="text" id="altura" placeholder="Altura en metros">
            <input type="text" id="peso" placeholder="Peso en kilogramos">
            <button onclick="calcularIMC()">Calcular IMC</button>
            <p id="resultadoIMC"></p>
        </div>
        <div id="Calorias" class="calculator">
            <h2>Calculadora de Requerimientos Calóricos Diarios</h2>
            <input type="text" id="pesoCalorias" placeholder="Peso en kilogramos">
            <select id="actividadCalorias">
                <option value="" selected>Como es tu actividad diaria?</option>
                <option value="1.2">Sedentario</option>
                <option value="1.375">Ligera actividad</option>
                <option value="1.55">Moderada actividad</option>
                <option value="1.725">Alta actividad</option>
                <option value="1.9">Muy alta actividad</option>
            </select>
            <button onclick="calcularCalorias()">Calcular Calorías</button>
            <p id="resultadoCalorias"></p>
        </div>
        <div id="Macros" class="calculator">
            <h2>Calculadora de Macronutrientes</h2>
            <input type="text" id="calorias" placeholder="Calorías diarias">
            <button onclick="calcularMacros()">Calcular Macronutrientes</button>
            <p id="resultadoMacros"></p>
        </div>
        <div id="Grasa" class="calculator">
            <h2>Calculadora de Porcentaje de Grasa Corporal</h2>
            <input type="text" id="cintura" placeholder="Circunferencia de cintura en cm">
            <input type="text" id="cuello" placeholder="Circunferencia de cuello en cm">
            <input type="text" id="cadera" placeholder="Circunferencia de cadera en cm (opcional para hombres)">
            <button onclick="calcularGrasa()">Calcular % Grasa Corporal</button>
            <p id="resultadoGrasa"></p>
        </div>
    </div>

<?php
 include('includes/footer.html');
?>
	<!-- Link JS -->
<script src="js/script.js"></script>
</body>
</html>