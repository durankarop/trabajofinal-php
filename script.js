var cantidad = document.getElementById("inputCantidad");
var categoria = document.getElementById("inputCategoria");
var precio = 200;
var estudiante = document.getElementById("opcion1");
var trainee = document.getElementById("opcion2");
var junior = document.getElementById("opcion3");
var descEstudiante = precio - (precio * estudiante.value);
var descTrainee = precio - (precio * trainee.value);
var descJunior = precio - (precio * junior.value);
var pagoTotal = document.getElementById("pagoTotal");




function precioEntradas() {
        // if (categoria.value == categoria.options["1"].value) {
        //     console.log(cantidad.value * descTrainee);
        // } else  if (categoria.value == categoria.options["2"].value) {
        //     console.log(cantidad.value * descJunior);
        // } else {
        //     console.log(cantidad.value * descEstudiante);
        // }
    switch (categoria.value) {
        case categoria.options["1"].value:
            pagoTotal.textContent = "Total a pagar:" + " " + "$" + (cantidad.value * descTrainee);
            break;

        case categoria.options["2"].value:
            pagoTotal.textContent = "Total a pagar:" + " " + "$" + (cantidad.value * descJunior);
            break;    

        default:
            pagoTotal.textContent = "Total a pagar:" + " " + "$" + (cantidad.value * descEstudiante);
            break;
    }
}

// function borrarTodo() {
//     pagoTotal.textContent = "Total a pagar:" + " " + "$";

// }
