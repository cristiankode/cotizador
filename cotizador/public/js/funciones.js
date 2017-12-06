/* global tipoH */
var adulto;
var junior;
var menor;

var tableDistribucionHabitaciones;
$(document).ready(function () {
    $("#inputCombinacion2Junior").spinner();
    $("#inputCombinacion2Adultos").spinner();
    $("#inputCombinacion2Menor").spinner();
    $("#inputCombinacion1Adultos").spinner();
    $("#inputCombinacion1Junior").spinner();
    $("#inputCombinacion1Menor").spinner();
    listarDistribucionHabitaciones();
});
var listarDistribucionHabitaciones = function () {
    tableDistribucionHabitaciones = $("#tableDistribucionHabitaciones").DataTable({
//        "scrollY": "100px",
        "scrollCollapse": true,
        "paging": false,
        "ordering": false,
        "searching": false,
        "info": false,
        "language": {
            "zeroRecords": "Distribucion de Habitaciones Correcta."
        }
    });
};


$(":button").click(function (event) {
    event.preventDefault();
    let id = this.id;
    if (this.id === "btnSiguienteCaptura") {

        var nAdultos = $("#inputCombinacion1Adultos").val();
        var nJunior = $("#inputCombinacion1Junior").val();
        var nMenor = $("#inputCombinacion1Menor").val();
        if (nAdultos <= 0 && nJunior <= 0 && nMenor <= 0) {
            alert('Error: Es necesario indicar número de pasajeros\n');
        } else {
            $("#selectNHabitaciones").prop("disabled", false);

        }
    } else if (this.id === "btnGrabar") {

        var valid = '';
        var required = ' es requerido.';
        adulto = $("#inputCombinacion1Adultos").val();
        junior = $("#inputCombinacion1Junior").val();
        menor = $("#inputCombinacion1Menor").val();
        var tipoH = $("#selectTipoHabitacion").val();
        
        if((getTotalPasajeros(adulto,junior,menor) === tipoH)){
           console.log(adulto,junior,menor);
        }  
        
    }
});

/*get TotalPasajeros*/
function getTotalPasajeros(adulto,junior,menor){

        var a = parseInt(adulto);
        var j = parseInt(junior);
        var m = parseInt(menor);
        var r = a + j + m; 
        return  r;
}

function agregaFila(hab, adulto, junior, menor) {
    fila = {hab, adulto, junior, menor};
    for (var fila = 0; fila < 1; fila++) {
        $('#addFila').html('<tr><td>' + hab + '</td>\n\
                                                      <td>' + adulto + '</td>\n\
                                                      <td>' + junior + '</td>\n\
                                                      <td>' + menor + '</td></tr>');
    }

};

function validaTipoHabitacion(adulto,junior,menor,tipoH){
    console.log(tipoH);
      //Valida tipos de Habitaciones
      if(getTotalPasajeros(adulto,junior,menor) === tipoH){
          console.log(tipoH);
    }

//        /*Habitacion Sencilla*/
//        if (adulto === "1" && menor === "0") {
//            agregaFila(tipoH, adulto, junior, menor);
//            /*Habitacion Sencilla C/1 Menor*/
//        } else if (adulto === "1" && menor === "1") {
//            agregaFila(tipoH, adulto, junior, menor);
//            /*Habitacion Sencilla C/2 Menores*/
//        } else if (adulto === "1" && menor === "2") {
//            agregaFila(tipoH, adulto, junior, menor);
//            /*Habitacion Sencilla C/3 Menores*/
//        } else if (adulto === "1" && menor === "3") {
//            agregaFila(tipoH, adulto, junior, menor);
//            /*Doble*/
//        } else if (adulto === "2" && menor === "0") {
//            agregaFila(tipoH, adulto, junior, menor);
//        }
};

$("#selectNHabitaciones").change(function (e) {
    e.preventDefault();

    if ($(this).val() === "0") {
        alert("Error: Selecciona número de habitaciones");
        $("#selectTipoHabitacion").prop("disabled", true);
    } else {
        $("#selectTipoHabitacion").prop("disabled", false);
        adulto = $("#inputCombinacion1Adultos").val();
        junior = $("#inputCombinacion1Junior").val();
        menor = $("#inputCombinacion1Menor").val();
        
         
        let nHabitacion = parseInt($(this).val());
        if( nHabitacion > getTotalPasajeros(adulto,junior,menor)){
            alert("Error: Número de habitaciones es mayor al numero de pasajeros intenta nuevamente por favor");
            $("#selectNHabitaciones").prop("disabled", true);
        }
    }
});

$("#selectTipoHabitacion").change(function () {

    if ($(this).val() === "0") {
        $("#btnGrabar").prop("disabled", true);
    } else {
        $("#btnGrabar").prop("disabled", false);
    }
});


