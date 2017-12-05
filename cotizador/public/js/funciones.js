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
        "scrollY": "150px",
        "scrollCollapse": false,
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
            $("#selectTipoHabitacion").prop("disabled", false);
        }
    }

    if (this.id === "btnGrabar") {

        var parametros = {
            "nHabitaciones": $("#selectNHabitaciones").val(),
            "tHabitacion": $("#selectTipoHabitacion").val(),
            "nAdultos": $("#inputCombinacion1Adultos").val(),
            "nJunior": $("#inputCombinacion1Junior").val(),
            "nMenor": $("#inputCombinacion1Menor").val(),
            "btnGrabar": id
        };
        console.log(parametros);
        $.ajax({
            type: "post",
            url: "./services/HabitacionesDistribucionService.php",
            data: parametros,
            beforeSend: function () {

            },
            success: function (response) {
                console.log(response);
            }
        });
    }

});