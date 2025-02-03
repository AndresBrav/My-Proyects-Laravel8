let operacion = "";

const boton1 = document.getElementById("btn1"); // Obtener el botón correctamente

// Selecciona el h1 donde se mostrará el resultado
const resultadoElement = document.getElementById('resultado');

const comparar = () =>{
    if(operacion.length >2){
        if (
            (
                (operacion[operacion.length - 2] === '/' ||
                    operacion[operacion.length - 2] === '*' ||
                    operacion[operacion.length - 2] === '+' ||
                    operacion[operacion.length - 2] === '-')
                &&
                (operacion[operacion.length - 1] === '+' ||
                    operacion[operacion.length - 1] === '-' ||
                    operacion[operacion.length - 1] === '*' ||
                    operacion[operacion.length - 1] === '/')
            )
        ) {
            alert("Error en la operación no puedes ingresar dos signos seguidos");
            
        } else {
            operacion = operacion.slice(0, -1);
            console.log("Operación actual:", operacion);
        }

    }

    

}


boton1.addEventListener("click", function () {
    // console.log(boton1.textContent); // Mostrar el texto del botón

    
    const aux = boton1.textContent; // obtener contenido
    // Añadir un número y un operador
    operacion = operacion + boton1.textContent;

    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
    comparar();
});

const boton2 = document.getElementById("btn2"); // Obtener el botón correctamente
boton2.addEventListener("click", function () {
    const aux = boton2.textContent;
    operacion = operacion + aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton3 = document.getElementById("btn3"); // Obtener el botón correctamente
boton3.addEventListener("click", function () {
    const aux = boton3.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton4 = document.getElementById("btn4"); // Obtener el botón correctamente
boton4.addEventListener("click", function () {
    const aux = boton4.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton5 = document.getElementById("btn5"); // Obtener el botón correctamente
boton5.addEventListener("click", function () {
    const aux = boton5.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton6 = document.getElementById("btn6"); // Obtener el botón correctamente
boton6.addEventListener("click", function () {
    const aux = boton6.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton7 = document.getElementById("btn7"); // Obtener el botón correctamente
boton7.addEventListener("click", function () {
    const aux = boton7.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton8 = document.getElementById("btn8"); // Obtener el botón correctamente
boton8.addEventListener("click", function () {
    const aux = boton8.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
    comparar();
});

const boton9 = document.getElementById("btn9"); // Obtener el botón correctamente
boton9.addEventListener("click", function () {
    const aux = boton9.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton10 = document.getElementById("btn10"); // Obtener el botón correctamente
boton10.addEventListener("click", function () {
    const aux = boton10.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton11 = document.getElementById("btn11"); // Obtener el botón correctamente
boton11.addEventListener("click", function () {
    const aux = boton11.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton12 = document.getElementById("btn12"); // Obtener el botón correctamente
boton12.addEventListener("click", function () {
    const aux = boton12.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
    comparar();
});

const boton13 = document.getElementById("btn13"); // Obtener el botón correctamente
boton13.addEventListener("click", function () {
    const aux = boton13.textContent;
    let resultado = eval(operacion) || ""
    // operacion += aux;
    console.log(resultado);
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " +resultado ;
});

const boton14 = document.getElementById("btn14"); // Obtener el botón correctamente
boton14.addEventListener("click", function () {
    const aux = boton14.textContent;
    operacion =""; //vaciar el arreglo
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
});

const boton15 = document.getElementById("btn15"); // Obtener el botón correctamente
boton15.addEventListener("click", function () {
    const aux = boton15.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
    comparar();
});

const boton16 = document.getElementById("btn16"); // Obtener el botón correctamente
boton16.addEventListener("click", function () {
    const aux = boton16.textContent;
    operacion += aux;
    console.log(operacion);
    resultadoElement.textContent = "Resultado: " + operacion;
    comparar();
});
