// Responsive 
let nav = document.querySelector('.nav');

document.querySelector('#menu-btn').onclick = () =>{
    nav.classList.toggle('active');
}

/*function MostrarEjercicios() {
    document.getElementById('exercises').style.display = 'block';
} */


function showCalculator(calculatorName) {
    var calculators = document.getElementsByClassName("calculator");
    for (var i = 0; i < calculators.length; i++) {
        calculators[i].style.display = "none";
    }
    document.getElementById(calculatorName).style.display = "block";
}
  
function calcularIMC() {
    var altura = document.getElementById("altura").value;
    var peso = document.getElementById("peso").value;
    var imc = (peso / (altura * altura)).toFixed(1);
    document.getElementById("resultadoIMC").innerText = "Tu IMC es: " + imc;
}

function calcularCalorias() {
    var peso = document.getElementById("pesoCalorias").value;
    var actividad = document.getElementById("actividadCalorias").value;
    var calorias = (peso * 24 * actividad).toFixed(0);
    document.getElementById("resultadoCalorias").innerText = "Necesitas " + calorias + " calorías por día.";
}

function calcularMacros() {
    var calorias = document.getElementById("calorias").value;
    var proteinas = (calorias * 0.3 / 4).toFixed(0);
    var grasas = (calorias * 0.3 / 9).toFixed(0);
    var carbohidratos = (calorias * 0.4 / 4).toFixed(0);
    document.getElementById("resultadoMacros").innerText = "Proteínas: " + proteinas + "g, Grasas: " + grasas + "g, Carbohidratos: " + carbohidratos + "g.";
}

function calcularGrasa() {
    var cintura = document.getElementById("cintura").value;
    var cuello = document.getElementById("cuello").value;
    var cadera = document.getElementById("cadera").value;
    var grasa;
    if(cadera) {
        grasa = (495 / (1.29579 - 0.35004 * Math.log10(cintura + cadera - cuello) + 0.22100 * Math.log10(altura)) - 450).toFixed(1);
    } else {
        grasa = (495 / (1.0324 - 0.19077 * Math.log10(cintura - cuello) + 0.15456 * Math.log10(altura)) - 450).toFixed(1);
    }
    document.getElementById("resultadoGrasa").innerText = "Tu porcentaje de grasa corporal es: " + grasa + "%";
}