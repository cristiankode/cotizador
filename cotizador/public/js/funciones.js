var adulto;
var junior;
var menor;

$(document).ready(function () {
    
    
});


$(":button").click(function (event) {
    event.preventDefault();
    let id = this.id;
   
});

/*get TotalPasajeros*/
function getTotalPasajeros(adulto,junior,menor){

        var a = parseInt(adulto);
        var j = parseInt(junior);
        var m = parseInt(menor);
        var r = a + j + m; 
        return  r;
}


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

$("#hab").change(function (e) {
    e.preventDefault();
    
    if ($(this).val() === "0") {
          $('#hab1Personas').hide();
          $('#hab2Personas').hide();
          $('#hab3Personas').hide();
          $('#hab4Personas').hide();
          $('#hab5Personas').hide();
        $( "#mensajeSelect" ).html('<div class="alert alert-danger" role="alert">Selecciona el número de habitaciones. Intenta Nueva Mente Por favor.</div>').slideDown( "slow" ).delay( 3000 ).slideUp( 1500 );
    } else {
        addSelects($(this).val());
    }
});

function addSelects(hab) {
    h = parseInt(hab);
    switch(h){
        
        case 1:
           showHabitacion1();
           $('#hab2Personas').hide();
           $('#hab3Personas').hide();
           $('#hab4Personas').hide();
           $('#hab5Personas').hide();
           showBtnBuscar();
           break;
        case 2:
            showHabitacion1();
            showHabitacion2();
             $('#hab3Personas').hide();
             $('#hab4Personas').hide();
             $('#hab5Personas').hide();
            break;
        case 3:
            showHabitacion1();
            showHabitacion2();
            showHabitacion3();
             $('#hab4Personas').hide();
             $('#hab5Personas').hide();
            break;
        case 4:
            showHabitacion1();
            showHabitacion2();
            showHabitacion3();
            showHabitacion4();
            $('#hab5Personas').hide();
            break;
        case 5:
            showHabitacion1();
            showHabitacion2();
            showHabitacion3();
            showHabitacion4();
            showHabitacion5();
            break;
            
    }
     
//    for (var fila = 0; hab < 1; fila++) {
//        $('#muestraNpersonas').html('<option value="">cuadrupe1</option><option value="">cuadrupe2</option>');
//    }

};


var showHabitacion1 = function(){
     $( "#hab1Personas" ).show();
        $('#muestraNAdultosSelectH1').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraNiñosSelectH1').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraEdadesSelectH1').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
    
};

var showHabitacion2 = function(){
     $( "#hab2Personas" ).show();
     $('#muestraNAdultosSelectH2').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraNiñosSelectH2').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraEdadesSelectH2').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
            
};

var showHabitacion3 = function(){
     $( "#hab3Personas" ).show();
     $('#muestraNAdultosSelectH3').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraNiñosSelectH3').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraEdadesSelectH3').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
            
};

var showHabitacion4 = function(){
     $( "#hab4Personas" ).show();
     $('#muestraNAdultosSelectH4').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraNiñosSelectH4').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraEdadesSelectH4').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
            
};

var showHabitacion5 = function(){
     $( "#hab5Personas" ).show();
     $('#muestraNAdultosSelectH5').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraNiñosSelectH5').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
        $('#muestraEdadesSelectH5').html(
            '<option value="0"></option>\n\
            <option value="1">1</option>\n\
            <option value="2">2</option>\n\
            <option value="3">3</option>\n\
            <option value="4">4</option>\n\
            <option value="5">5</option>');
            
};

var showBtnBuscar = function(){
  $( "#btnBuscar").show();  
};



//$("#selectTipoHabitacion").change(function () {
//
//    if ($(this).val() === "0") {
//        $("#btnGrabar").prop("disabled", true);
//    } else {
//        $("#btnGrabar").prop("disabled", false);
//    }
//});


